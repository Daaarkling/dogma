<?php

namespace Dogma\Mapping;

use Dogma\Mapping\Type\Handler;
use Dogma\Type;

class MappingStep
{
    use \Dogma\StrictBehaviorMixin;

    /** @var \Dogma\Type */
    private $type;

    /** @var \Dogma\Mapping\Type\Handler */
    private $handler;

    /** @var string[] */
    private $handlerKeys;

    /** @var string[] */
    private $sourceKeys;

    /** @var string */
    private $destinationKey;

    /**
     * @param \Dogma\Type $type
     * @param \Dogma\Mapping\Type\Handler $handler
     * @param string[] $handlerKeys ($sourceKey => $handlerKey)
     * @param string $destinationKey
     */
    public function __construct(Type $type, Handler $handler, array $handlerKeys, string $destinationKey)
    {
        $this->type = $type;
        $this->handler = $handler;
        $this->handlerKeys = $handlerKeys;
        $this->destinationKey = $destinationKey;

        $this->sourceKeys = array_flip($handlerKeys);
    }

    /**
     * Does a forward transformation step on the data
     * @param mixed[] &$data
     * @param \Dogma\Mapping\Mapper $mapper
     */
    public function stepForward(array &$data, Mapper $mapper)
    {
        $sourceData = [];
        $onlyNull = true;
        foreach ($this->handlerKeys as $sourceKey => $handlerKey) {
            if ($handlerKey === Handler::SINGLE_PARAMETER) {
                $sourceData = $data[$sourceKey];
                $onlyNull = false;
            } else {
                $sourceData[$handlerKey] = $data[$sourceKey];
                $onlyNull &= $data[$sourceKey] === null;
            }
            unset($data[$sourceKey]);
        }
        // skip null
        if ($onlyNull) {
            $data[$this->destinationKey] = null;
            return;
        }
        $data[$this->destinationKey] = $this->handler->createInstance($this->type, $sourceData, $mapper);
    }

    /**
     * Does a backward transformation step on the data
     * @param mixed[] &$data
     * @param \Dogma\Mapping\Mapper
     */
    public function stepBack(array &$data, Mapper $mapper)
    {
        $instance = $data[$this->destinationKey];
        unset($data[$this->destinationKey]);
        if ($instance === null) {
            // expand null
            foreach ($this->sourceKeys as $sourceKey) {
                $data[$sourceKey] = null;
            }
            return;
        }
        $sourceData = $this->handler->exportInstance($this->type, $instance, $mapper);
        if (isset($this->sourceKeys[Handler::SINGLE_PARAMETER])) {
            $data[$this->sourceKeys[Handler::SINGLE_PARAMETER]] = $sourceData;
        } else {
            foreach ($sourceData as $handlerKey => $value) {
                $data[$this->sourceKeys[$handlerKey]] = $value;
            }
        }
    }

}
