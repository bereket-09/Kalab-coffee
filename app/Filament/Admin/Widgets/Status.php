<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class Status extends ChartWidget
{
    protected static ?string $heading = 'Status';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
