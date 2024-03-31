<?php

namespace App\Filament\User\Resources\RegistrationResource\Pages;

use App\Filament\User\Resources\RegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegistration extends CreateRecord
{
    protected static string $resource = RegistrationResource::class;
}
