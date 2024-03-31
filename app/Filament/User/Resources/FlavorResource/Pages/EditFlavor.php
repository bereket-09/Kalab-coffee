<?php

namespace App\Filament\User\Resources\FlavorResource\Pages;

use App\Filament\User\Resources\FlavorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlavor extends EditRecord
{
    protected static string $resource = FlavorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
