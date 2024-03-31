<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\EventResource\Pages;
use App\Filament\User\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Events Management';
    protected static ?string $navigationLabel = 'Manage Events List';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('date_and_time')
                    ->required()->beforeOrEqual('registration_deadline'),
                    Forms\Components\Select::make('status')
                    ->options([
                        'Active' => 'Active',
                        'Cancelled' => 'Cancelled',
                        
                        'Postponed' => 'Postponed',
    
                    ])->required(),
                Forms\Components\TextInput::make('organizer_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('organizer_contact')
                    ->maxLength(255),
                // Forms\Components\TextInput::make('category'),
                Forms\Components\Select::make('category')
         
                    ->options([
                        'Conference' => 'Conference',
                        'Workshop' => 'Workshop',
                        'Live Event' => 'Live Event',
                        'Lessons' => 'Lessons',
                        'Other' => 'Other',
                        
                        
                ])->required(),
                Forms\Components\TextInput::make('capacity')
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('duration')
                    ->numeric(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\Textarea::make('tags'),
                Forms\Components\Toggle::make('visibility')
                    ->required(),
                // Forms\Components\TextInput::make('city')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('state')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('country')
                //     ->maxLength(255),
                // Forms\Components\TextInput::make('latitude')
                //     ->numeric(),
                // Forms\Components\TextInput::make('longitude')
                //     ->numeric(),
                Forms\Components\DateTimePicker::make('registration_deadline')->afterOrEqual('tomorrow'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_and_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('organizer_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organizer_contact')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\TextColumn::make('capacity')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duration')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\IconColumn::make('visibility')
                    ->boolean(),
                // Tables\Columns\TextColumn::make('city')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('state')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('country')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('latitude')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('longitude')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('registration_deadline')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
