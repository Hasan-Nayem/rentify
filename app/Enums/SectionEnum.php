<?php

namespace App\Enums;

enum SectionEnum: string
{
    case TOP_BAR = 'top_bar';
    case HERO = 'hero';
    case FLEET = 'fleet';
    case QUALITY = 'quality';
    case FEATURES = 'features';
    case NEWS = 'news';
    case TESTIMONIALS = 'testimonials';

    public function label(): string
    {
        return match ($this) {
            self::TOP_BAR => 'Top Utility Bar',
            self::HERO => 'Hero Section',
            self::FLEET => 'Our Vehicle Fleet',
            self::QUALITY => 'Only Quality For Clients',
            self::FEATURES => 'Explore The World',
            self::NEWS => 'Latest News',
            self::TESTIMONIALS => 'Happy Customers',
        };
    }
}
