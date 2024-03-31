<?php

namespace App\Filament\Admin\Resources\FlavorResource\Pages;

use App\Filament\Admin\Resources\FlavorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFlavors extends ListRecords
{
    protected static string $resource = FlavorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
