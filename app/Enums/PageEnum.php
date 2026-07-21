<?php

namespace App\Enums;

enum PageEnum: string
{
    case HOMEPAGE = 'homepage';

    public function label(): string
    {
        return match ($this) {
            self::HOMEPAGE => 'Homepage',
        };
    }
}
