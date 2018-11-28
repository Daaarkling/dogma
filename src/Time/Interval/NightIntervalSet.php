<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Time\Interval;

use Dogma\Arr;
use Dogma\Check;
use Dogma\Compare;
use Dogma\Equalable;
use Dogma\StrictBehaviorMixin;
use Dogma\Time\Date;
use function array_map;
use function array_merge;
use function array_shift;
use function count;
use function implode;
use function reset;
use function sort;

class NightIntervalSet implements DateOrTimeIntervalSet
{
    use StrictBehaviorMixin;

    /** @var \Dogma\Time\Interval\NightInterval[] */
    private $intervals;

    /**
     * @param \Dogma\Time\Interval\NightInterval[] $intervals
     */
    public function __construct(array $intervals)
    {
        $this->intervals = Arr::values(Arr::filter($intervals, function (NightInterval $interval): bool {
            return !$interval->isEmpty();
        }));
    }

    public static function createFromDateIntervalSet(DateIntervalSet $set): self
    {
        return new static(Arr::map($set->getIntervals(), function (DateInterval $interval): NightInterval {
            return NightInterval::createFromDateInterval($interval);
        }));
    }

    /**
     * @param \Dogma\Time\Date[] $dates
     * @return \Dogma\Time\Interval\NightIntervalSet
     */
    public static function createFromDateArray(array $dates): self
    {
        sort($dates);
        $intervals = [];
        $start = $previous = reset($dates);
        foreach ($dates as $date) {
            if ($date->getDayNumber() > $previous->getDayNumber() + 1) {
                $intervals[] = new NightInterval($start, $previous->addDay());
                $start = $date;
            }
            $previous = $date;
        }
        if ($start !== false) {
            $intervals[] = new NightInterval($start, $previous->addDay());
        }

        return new static($intervals);
    }

    public function toDateIntervalSet(): DateIntervalSet
    {
        return new DateIntervalSet(Arr::map($this->intervals, function (NightInterval $interval): DateInterval {
            return $interval->toDateInterval();
        }));
    }

    /**
     * @return \Dogma\Time\Date[]
     */
    public function toDateArray(): array
    {
        return array_merge(...array_map(function (NightInterval $interval) {
            return $interval->toDateArray();
        }, $this->intervals));
    }

    public function format(string $format = NightInterval::DEFAULT_FORMAT, ?DateTimeIntervalFormatter $formatter = null): string
    {
        return implode(', ', Arr::map($this->intervals, function (NightInterval $interval) use ($format, $formatter): string {
            return $interval->format($format, $formatter);
        }));
    }

    /**
     * @return \Dogma\Time\Interval\NightInterval[]
     */
    public function getIntervals(): array
    {
        return $this->intervals;
    }

    public function isEmpty(): bool
    {
        return $this->intervals === [];
    }

    /**
     * @param self $other
     * @return bool
     */
    public function equals(Equalable $other): bool
    {
        $other instanceof self || Check::object($other, self::class);

        $otherIntervals = $other->getIntervals();
        if (count($this->intervals) !== count($otherIntervals)) {
            return false;
        }
        foreach ($this->intervals as $i => $interval) {
            if (!$interval->equals($otherIntervals[$i])) {
                return false;
            }
        }

        return true;
    }

    public function containsValue(Date $value): bool
    {
        foreach ($this->intervals as $interval) {
            if ($interval->containsValue($value)) {
                return true;
            }
        }

        return false;
    }

    public function envelope(): NightInterval
    {
        if ($this->intervals === []) {
            return NightInterval::empty();
        } else {
            return reset($this->intervals)->envelope(...$this->intervals);
        }
    }

    /**
     * Join overlapping intervals in set.
     * @return self
     */
    public function normalize(): self
    {
        $intervals = NightInterval::sortByStart($this->intervals);
        $count = count($intervals) - 1;
        for ($n = 0; $n < $count; $n++) {
            if ($intervals[$n]->intersects($intervals[$n + 1]) || $intervals[$n]->touches($intervals[$n + 1])) {
                $intervals[$n + 1] = $intervals[$n]->envelope($intervals[$n + 1]);
                unset($intervals[$n]);
            }
        }

        return new static($intervals);
    }

    /**
     * Add another set of intervals to this one without normalization.
     * @param self $set
     * @return self
     */
    public function add(self $set): self
    {
        return self::addIntervals(...$set->intervals);
    }

    public function addIntervals(NightInterval ...$intervals): self
    {
        return new static(array_merge($this->intervals, $intervals));
    }

    /**
     * Remove another set of intervals from this one.
     * @param self $set
     * @return self
     */
    public function subtract(self $set): self
    {
        return self::subtractIntervals(...$set->intervals);
    }

    public function subtractIntervals(NightInterval ...$intervals): self
    {
        $sources = $this->intervals;
        $results = [];
        while ($result = array_shift($sources)) {
            foreach ($intervals as $interval) {
                $result = $result->subtract($interval);
                if (count($result->intervals) === 0) {
                    continue 2;
                } elseif (count($result->intervals) === 2) {
                    $sources[] = $result->intervals[1];
                }
                $result = $result->intervals[0];
            }
            if (!$result->isEmpty()) {
                $results[] = $result;
            }
        }

        return new static($results);
    }

    /**
     * Intersect with another set of intervals.
     * @param self $set
     * @return self
     */
    public function intersect(self $set): self
    {
        return self::intersectIntervals(...$set->intervals);
    }

    public function intersectIntervals(NightInterval ...$intervals): self
    {
        $results = [];
        foreach ($this->intervals as $result) {
            foreach ($intervals as $interval) {
                if ($result->intersects($interval)) {
                    $results[] = $result->intersect($interval);
                }
            }
        }

        return new static($results);
    }

    public function filterByLength(string $operator, int $days): self
    {
        return $this->filterByNightsCount($operator, $days);
    }

    public function filterByNightsCount(string $operator, int $days): self
    {
        $results = [];
        foreach ($this->intervals as $interval) {
            $result = $interval->getLengthInDays() <=> $days;
            switch ($operator) {
                case Compare::LESSER:
                    if ($result === -1) {
                        $results[] = $interval;
                    }
                    break;
                case Compare::LESSER_OR_EQUAL:
                    if ($result !== 1) {
                        $results[] = $interval;
                    }
                    break;
                case Compare::EQUAL:
                    if ($result === 0) {
                        $results[] = $interval;
                    }
                    break;
                case Compare::NOT_EQUAL:
                    if ($result !== 0) {
                        $results[] = $interval;
                    }
                    break;
                case Compare::GREATER_OR_EQUAL:
                    if ($result !== -1) {
                        $results[] = $interval;
                    }
                    break;
                case Compare::GREATER:
                    if ($result === 1) {
                        $results[] = $interval;
                    }
                    break;
            }
        }

        return new static($results);
    }

    public function map(callable $mapper): self
    {
        $results = [];
        foreach ($this->intervals as $interval) {
            $results[] = $mapper($interval);
        }

        return new static($results);
    }

    public function collect(callable $mapper): self
    {
        $results = [];
        foreach ($this->intervals as $interval) {
            $result = $mapper($interval);
            if ($result !== null) {
                $results[] = $result;
            }
        }

        return new static($results);
    }

}