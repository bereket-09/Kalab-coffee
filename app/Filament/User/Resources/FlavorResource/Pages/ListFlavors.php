<?php

namespace App\Filament\User\Resources\FlavorResource\Pages;

use App\Filament\User\Resources\FlavorResource;
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
