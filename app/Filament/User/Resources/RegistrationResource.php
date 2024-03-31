<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\RegistrationResource\Pages;
use App\Filament\User\Resources\RegistrationResource\RelationManagers;
use App\Models\Registration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Events Management';
    protected static ?string $navigationLabel = 'Manage Registrations';

    public static function form(Form $form): Form
    {
        return $form
    ->schema([
        Forms\Components\TextInput::make('event_id')
            ->required()
            ->numeric()
            ->label('Event ID'),
        Forms\Components\TextInput::make('name')
            ->required()
            ->maxLength(255)
            ->label('Full Name'),
        Forms\Components\TextInput::make('address')
            ->required()
            ->maxLength(255)
            ->label('Address'),
        Forms\Components\TextInput::make('phone_number')
            ->tel()
            ->required()
            ->maxLength(255)
            ->label('Phone Number'),
        Forms\Components\TextInput::make('email')
            ->email()
            ->required()
            ->maxLength(255)
            ->label('Email'),
        Forms\Components\Textarea::make('note')
            ->columnSpanFull()
            ->label('Note'),
        Forms\Components\Select::make('payment_status')
            ->options([
                'Pending' => 'Pending',
                'Paid' => 'Paid',
                'Refunded' => 'Refunded',
            ])
            ->required()
            ->label('Payment Status'),
        Forms\Components\Select::make('status')
            ->options([
                'pending' => 'Pending',
                'approved' => 'Approved',
                'rejected' => 'Rejected',
            ])
            ->required()
            ->label('Status'),
        Forms\Components\TextInput::make('dietary_restrictions')
            ->maxLength(255)
            ->label('Dietary Restrictions'),
        Forms\Components\TextInput::make('emergency_contact')
            ->maxLength(255)
            ->label('Emergency Contact'),
        Forms\Components\DatePicker::make('date_of_birth')
            ->label('Date of Birth'),
        Forms\Components\TextInput::make('tshirt_size')
            ->maxLength(255)
            ->label('T-shirt Size'),
        Forms\Components\Textarea::make('special_requirements')
            ->columnSpanFull()
            ->label('Special Requirements'),
        Forms\Components\TextInput::make('referral_source')
            ->maxLength(255)
            ->label('Referral Source'),
        Forms\Components\TextInput::make('social_media_profiles')
            ->maxLength(255)
            ->label('Social Media Profiles'),
        Forms\Components\Textarea::make('additional_notes')
            ->columnSpanFull()
            ->label('Additional Notes'),
        Forms\Components\DateTimePicker::make('registration_date')
            ->label('Registration Date'),
    ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('payment_status'),
                Tables\Columns\TextColumn::make('dietary_restrictions')
                    ->searchable(),
                Tables\Columns\TextColumn::make('emergency_contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tshirt_size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('referral_source')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social_media_profiles')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registration_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'view' => Pages\ViewRegistration::route('/{record}'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }
}
