<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Eloquent\Repositories\Utils;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class GroupBy
{
    /**
     * @param $data
     *
     * @return static
     */
    public static function seconds($data)
    {
        return static::groupByDateTime($data, 's');
    }

    /**
     * @param $data
     *
     * @return static
     */
    public static function minutes($data)
    {
        return static::groupByDateTime($data, 'i');
    }

    /**
     * @param $data
     * @param string $format
     *
     * @return static
     */
    public static function hours($data, $format = 'H')
    {
        return static::groupByDateTime($data, $format);
    }

    /**
     * @param $data
     * @param string $format
     *
     * @return static
     */
    public static function days($data, $format = 'd')
    {
        return static::groupByDateTime($data, $format);
    }

    /**
     * @param $data
     *
     * @return static
     */
    public static function weeks($data)
    {
        return static::groupByDateTime($data, 'W');
    }

    /**
     * @param $data
     * @param string $format
     *
     * @return static
     */
    public static function months($data, $format = 'm')
    {
        return static::groupByDateTime($data, $format);
    }

    /**
     * @param $data
     * @param string $format
     *
     * @return static
     */
    public static function years($data, $format = 'Y')
    {
        return static::groupByDateTime($data, $format);
    }

    /**
     * @param $data
     * @param string $format
     *
     * @return static
     */
    public static function timezone($data, $format = 'e')
    {
        return static::groupByDateTime($data, $format);
    }

    /**
     * @param $data
     *
     * @return static
     */
    public static function createdAt($data)
    {
        return static::groupByKey($data, 'created_at');
    }

    /**
     * @param $data
     *
     * @return static
     */
    public static function updatedAt($data)
    {
        return static::groupByKey($data, 'updated_at');
    }

    /**
     * @param $data
     *
     * @return static
     */
    public static function deletedAt($data)
    {
        return static::groupByKey($data, 'deleted_at');
    }

    /**
     * @param $data
     * @param $key
     *
     * @return static
     */
    public static function groupByKey($data, $key)
    {
        $data = static::toCollection($data)->groupBy(function ($item) use ($key) {
            return (string) $item->$key;
        });

        return static::sortByKeys($data);
    }

    /**
     * @param $data
     * @param $dateFormat
     *
     * @return static
     */
    public static function groupByDateTime($data, $dateFormat)
    {
        $data = static::toCollection($data)->groupBy(function ($date) use ($dateFormat) {
            return Carbon::parse($date->created_at)->format($dateFormat);
        });

        return static::sortByKeys($data);
    }

    /**
     * @param $data
     *
     * @return static
     */
    private static function sortByKeys($data)
    {
        return static::toCollection($data)->sortBy(function ($item, $key) {
            return $key;
        });
    }

    /**
     * @param $data
     *
     * @return Collection
     */
    private static function toCollection($data)
    {
        if (!$data instanceof Collection) {
            $data = new Collection($data);
        }

        return $data;
    }
}
