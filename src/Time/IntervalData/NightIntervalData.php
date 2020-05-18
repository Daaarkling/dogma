<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Time\IntervalData;

use DateTimeInterface;
use Dogma\Arr;
use Dogma\Check;
use Dogma\Comparable;
use Dogma\Equalable;
use Dogma\IntersectComparable;
use Dogma\Math\Interval\IntervalCalc;
use Dogma\Pokeable;
use Dogma\StrictBehaviorMixin;
use Dogma\Time\Date;
use Dogma\Time\Interval\NightInterval;
use Dogma\Time\InvalidIntervalStartEndOrderException;
use Dogma\Time\Span\DateSpan;
use Dogma\Time\Span\DateTimeSpan;
use function array_shift;
use function array_values;

/**
 * Interval of nights with data bound to it.
 */
class NightIntervalData implements Equalable, Comparable, IntersectComparable, Pokeable
{
    use StrictBehaviorMixin;

    public const MIN = Date::MIN;
    public const MAX = Date::MAX;

    /** @var Date */
    private $start;

    /** @var Date */
    private $end;

    /** @var mixed|null */
    private $data;

    /**
     * @param Date $start
     * @param Date $end
     * @param mixed|null $data
     */
    public function __construct(Date $start, Date $end, $data)
    {
        if ($start->getJulianDay() > $end->getJulianDay()) {
            throw new InvalidIntervalStartEndOrderException($start, $end);
        }

        $this->start = $start;
        $this->end = $end;
        $this->data = $data;
    }

    /**
     * @param NightInterval $interval
     * @param mixed|null $data
     * @return self
     */
    public static function createFromNightInterval(NightInterval $interval, $data): self
    {
        return new static($interval->getStart(), $interval->getEnd(), $data);
    }

    public static function empty(): self
    {
        $interval = new static(new Date(), new Date(), null);
        $interval->start = new Date(self::MAX);
        $interval->end = new Date(self::MIN);

        return $interval;
    }

    /**
     * @param mixed|null $data
     * @return self
     */
    public static function all($data): self
    {
        return new static(new Date(self::MIN), new Date(self::MAX), $data);
    }

    public function poke(): void
    {
        $this->start->format();
        $this->end->format();
    }

    // modifications ---------------------------------------------------------------------------------------------------

    /**
     * @param string $value
     * @return static
     */
    public function shift(string $value): self
    {
        return new static($this->start->modify($value), $this->end->modify($value), $this->data);
    }

    public function setStart(Date $start): self
    {
        return new static($start, $this->end, $this->data);
    }

    public function setEnd(Date $end): self
    {
        return new static($this->start, $end, $this->data);
    }

    // queries ---------------------------------------------------------------------------------------------------------

    public function getSpan(): DateTimeSpan
    {
        return DateTimeSpan::createFromDateInterval($this->start->diff($this->end));
    }

    public function getDateSpan(): DateSpan
    {
        return DateSpan::createFromDateInterval($this->start->diff($this->end));
    }

    public function getLengthInDays(): int
    {
        return $this->isEmpty() ? 0 : $this->end->getJulianDay() - $this->start->getJulianDay();
    }

    public function getDayCount(): int
    {
        return $this->getLengthInDays();
    }

    public function toNightInterval(): NightInterval
    {
        return new NightInterval($this->start, $this->end);
    }

    /**
     * @return Date[]|mixed[] array of pairs (Date $date, mixed $data)
     */
    public function toDateDataArray(): array
    {
        if ($this->start->getJulianDay() > $this->end->getJulianDay()) {
            return [];
        }

        $date = $this->start;
        $dates = [];
        do {
            $dates[] = [$date, $this->data];
            $date = $date->addDay();
        } while ($date->isBefore($this->end));

        return $dates;
    }

    public function getStart(): Date
    {
        return $this->start;
    }

    public function getEnd(): Date
    {
        return $this->end;
    }

    /**
     * @return Date[]
     */
    public function getStartEnd(): array
    {
        return [$this->start, $this->end];
    }

    /**
     * @return mixed|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function isEmpty(): bool
    {
        return $this->start->getJulianDay() > $this->end->getJulianDay();
    }

    /**
     * @param self $other
     * @return bool
     */
    public function equals(Equalable $other): bool
    {
        Check::instance($other, self::class);

        return $this->start->equals($other->start) && $this->end->equals($other->end) && $this->dataEquals($other->data);
    }

    /**
     * @param mixed|null $otherData
     * @return bool
     */
    public function dataEquals($otherData): bool
    {
        if ($this->data instanceof Equalable && $otherData instanceof Equalable) {
            return $this->data->equals($otherData);
        }

        return $this->data === $otherData;
    }

    /**
     * @param self $other
     * @return int
     */
    public function compare(Comparable $other): int
    {
        Check::instance($other, self::class);

        return $this->start->compare($other->start)
            ?: $this->end->compare($other->end);
    }

    /**
     * @param self $other
     * @return int
     */
    public function compareIntersects(IntersectComparable $other): int
    {
        Check::instance($other, self::class);

        return IntervalCalc::compareIntersects(
            $this->start->getJulianDay(),
            $this->end->getJulianDay() - 1,
            $other->start->getJulianDay(),
            $other->end->getJulianDay() - 1
        );
    }

    /**
     * @param Date|DateTimeInterface $date
     * @return bool
     */
    public function containsValue($date): bool
    {
        if (!$date instanceof Date) {
            $date = Date::createFromDateTimeInterface($date);
        }

        return $date->isBetween($this->start, $this->end->subtractDay());
    }

    /**
     * @param NightInterval|NightIntervalData $interval
     * @return bool
     */
    public function contains($interval): bool
    {
        if ($this->isEmpty() || $interval->isEmpty()) {
            return false;
        }

        return $this->start->isSameOrBefore($interval->getStart()) && $this->end->isSameOrAfter($interval->getEnd());
    }

    /**
     * @param NightInterval|NightIntervalData $interval
     * @return bool
     */
    public function intersects($interval): bool
    {
        return $this->start->isBefore($interval->getEnd()) && $this->end->isAfter($interval->getStart());
    }

    /**
     * @param NightInterval|NightIntervalData $interval
     * @return bool
     */
    public function touches($interval): bool
    {
        return $this->start->equals($interval->getEnd()) || $this->end->equals($interval->getStart());
    }

    // actions ---------------------------------------------------------------------------------------------------------

    public function intersect(NightInterval ...$items): self
    {
        $items[] = $this->toNightInterval();
        /** @var self[] $items */
        $items = Arr::sortComparable($items);

        $result = array_shift($items);
        foreach ($items as $item) {
            if ($result->getEnd()->isSameOrAfter($item->getStart())) {
                $result = new NightInterval(Date::max($result->getStart(), $item->getStart()), Date::min($result->getEnd(), $item->getEnd()));
            } else {
                return static::empty();
            }
        }

        return new static($result->getStart(), $result->getEnd(), $this->data);
    }

    public function subtract(NightInterval ...$items): NightIntervalDataSet
    {
        $intervals = [$this];

        foreach ($items as $item) {
            if ($item->isEmpty()) {
                continue;
            }
            foreach ($intervals as $i => $interval) {
                unset($intervals[$i]);
                if ($interval->start->isBefore($item->getStart()) && $interval->end->isAfter($item->getEnd())) {
                    $intervals[] = new static($interval->start, $item->getStart(), $this->data);
                    $intervals[] = new static($item->getEnd(), $interval->end, $this->data);
                } elseif ($interval->start->isBefore($item->getStart())) {
                    $intervals[] = new static($interval->start, Date::min($interval->end, $item->getStart()), $this->data);
                } elseif ($interval->end->isAfter($item->getEnd())) {
                    $intervals[] = new static(Date::max($interval->start, $item->getEnd()), $interval->end, $this->data);
                }
            }
        }

        return new NightIntervalDataSet(array_values($intervals));
    }

    // static ----------------------------------------------------------------------------------------------------------

    /**
     * @param self[] $intervals
     * @return self[]
     * @deprecated will be removed. use Arr::sortComparable() instead.
     */
    public static function sort(array $intervals): array
    {
        return Arr::sortComparable($intervals);
    }

    /**
     * @param self[] $intervals
     * @return self[]
     * @deprecated will be removed. use Arr::sortComparable() instead.
     */
    public static function sortByStart(array $intervals): array
    {
        return Arr::sortComparable($intervals);
    }

}
