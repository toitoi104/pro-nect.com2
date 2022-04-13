<?php

namespace App\Models\Question\Enum;

use App\Http\Infrastructure\Enum\Enum;

class Status extends Enum
{
    public static $strValues = [
        self::PUBLIC => '公開',
        self::PRIVATE => '非公開',
    ];

    public static $values = [
        self::PUBLIC,
        self::PRIVATE,
    ];

    const PUBLIC = 1;
    const PRIVATE = 2;
}
