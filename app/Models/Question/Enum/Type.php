<?php

namespace App\Models\Question\Enum;

use App\Http\Infrastructure\Enum\Enum;

class Type extends Enum
{
    public static $strValues = [
        self::PROGRAMING => 'プログラミング',
        self::CAREER => 'エンジニアキャリア',
        self::PRIVATE => 'エンジニア私生活',
        self::FREELANCE => 'フリーランス',
    ];

    public static $values = [
        self::PROGRAMING,
        self::CAREER,
        self::PRIVATE,
        self::FREELANCE,
    ];

    const PROGRAMING = 1;
    const CAREER = 2;
    const PRIVATE = 3;
    const FREELANCE = 4;
}
