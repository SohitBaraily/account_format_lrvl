<?php

namespace App\Filament\Widgets;

use App\Models\Party;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class parties extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Parties', Party::count()),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
