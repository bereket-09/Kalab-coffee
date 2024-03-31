<?php

namespace App\Filament\Admin\Resources\FlavorResource\Pages;

use App\Filament\Admin\Resources\FlavorResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFlavor extends ViewRecord
{
    protected static string $resource = FlavorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
