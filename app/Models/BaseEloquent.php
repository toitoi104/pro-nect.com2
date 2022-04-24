<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseEloquent extends Model
{
    public const TABLE = '';

    public const PRIMARY = '';

    public static function dot(string $columnName): string
    {
        return static::TABLE.'.'.$columnName;
    }

    public static function dotPrimary(): string
    {
        return static::TABLE.'.'.static::PRIMARY;
    }

    public static function tableAs(string $asTableName): string
    {
        return static::TABLE." as {$asTableName}";
    }
}
