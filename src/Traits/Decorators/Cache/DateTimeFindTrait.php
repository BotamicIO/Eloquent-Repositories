<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

trait DateTimeFindTrait
{
    /**
     * @param $key
     * @param $value
     * @param $column
     * @param $range
     *
     * @return mixed
     */
    public function findWhereDateTimeBetween($key, $value, $column, $range)
    {
        $key = $this->buildCacheKey(['findWhereDateTimeBetween', $key, $value, $column, $range]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findWhereDateTimeBetween($key, $value, $column, $range);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromToday($key, $value)
    {
        $key = $this->buildCacheKey(['findFromToday', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromToday($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromYesterday($key, $value)
    {
        $key = $this->buildCacheKey(['findFromYesterday', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromYesterday($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastSevenDays($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastSevenDays', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastSevenDays($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastThirtyDays($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastThirtyDays', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastThirtyDays($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastFourWeeks($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastFourWeeks', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastFourWeeks($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromThisDay($key, $value)
    {
        $key = $this->buildCacheKey(['findFromThisDay', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromThisDay($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromThisWeek($key, $value)
    {
        $key = $this->buildCacheKey(['findFromThisWeek', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromThisWeek($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromThisMonth($key, $value)
    {
        $key = $this->buildCacheKey(['findFromThisMonth', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromThisMonth($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromThisYear($key, $value)
    {
        $key = $this->buildCacheKey(['findFromThisYear', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromThisYear($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromThisDecade($key, $value)
    {
        $key = $this->buildCacheKey(['findFromThisDecade', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromThisDecade($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromThisCentury($key, $value)
    {
        $key = $this->buildCacheKey(['findFromThisCentury', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromThisCentury($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastDay($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastDay', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastDay($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastWeek($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastWeek', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastWeek($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastMonth($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastMonth', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastMonth($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastYear($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastYear', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastYear($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastDecade($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastDecade', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastDecade($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     *
     * @return mixed
     */
    public function findFromLastCentury($key, $value)
    {
        $key = $this->buildCacheKey(['findFromLastCentury', $key, $value]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromLastCentury($key, $value);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $ago
     * @param null $endDateTime
     *
     * @return mixed
     */
    public function findFromDaysAgo($key, $value, $ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['findFromDaysAgo', $key, $value, $ago, $endDateTime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromDaysAgo($key, $value, $ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $ago
     * @param null $endDateTime
     *
     * @return mixed
     */
    public function findFromWeeksAgo($key, $value, $ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['findFromWeeksAgo', $key, $value, $ago, $endDateTime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromWeeksAgo($key, $value, $ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $ago
     * @param null $endDateTime
     *
     * @return mixed
     */
    public function findFromMonthsAgo($key, $value, $ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['findFromMonthsAgo', $key, $value, $ago, $endDateTime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromMonthsAgo($key, $value, $ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $ago
     * @param null $endDateTime
     *
     * @return mixed
     */
    public function findFromYearsAgo($key, $value, $ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['findFromYearsAgo', $key, $value, $ago, $endDateTime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromYearsAgo($key, $value, $ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $ago
     * @param null $endDateTime
     *
     * @return mixed
     */
    public function findFromDecadesAgo($key, $value, $ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['findFromDecadesAgo', $key, $value, $ago, $endDateTime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromDecadesAgo($key, $value, $ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $ago
     * @param null $endDateTime
     *
     * @return mixed
     */
    public function findFromCenturiesAgo($key, $value, $ago, $endDateTime = null)
    {
        $key = $this->buildCacheKey(['findFromCenturiesAgo', $key, $value, $ago, $endDateTime]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromCenturiesAgo($key, $value, $ago, $endDateTime = null);

        return $this->put($key, $records);
    }

    /**
     * @param $key
     * @param $value
     * @param $range
     * @param bool $exact
     *
     * @return mixed
     */
    public function findFromDateTimeRange($key, $value, $range, $exact = false)
    {
        $key = $this->buildCacheKey(['findFromDateTimeRange', $key, $value, $range, $exact]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->findFromDateTimeRange($key, $value, $range, $exact);

        return $this->put($key, $records);
    }
}
