<?php

namespace App\Http\Infrastructure\Enum;

class Enum
{
    protected static $strValues = [];
    protected static $values = [];

    public static function getStrValues(): array
    {
        return static::$strValues;
    }

    /**
     * @param $v
     * @return mixed
     */
    public static function getStrValue($v)
    {
        return static::$strValues[$v];
    }

    public static function getValues(): array
    {
        return static::$values;
    }
}
