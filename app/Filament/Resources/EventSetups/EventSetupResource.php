<?php

namespace App\Filament\Resources\EventSetups;

use App\Filament\Resources\EventSetups\Pages\CreateEventSetup;
use App\Filament\Resources\EventSetups\Pages\EditEventSetup;
use App\Filament\Resources\EventSetups\Pages\ListEventSetups;
use App\Filament\Resources\EventSetups\Schemas\EventSetupForm;
use App\Filament\Resources\EventSetups\Tables\EventSetupsTable;
use App\Models\EventSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventSetupResource extends Resource
{
    protected static ?string $model = EventSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCamera;

    protected static ?string $modelLabel = 'Event Setup';

    protected static ?string $navigationLabel = 'Event Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Event Management';


    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return EventSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventSetupsTable::configure($table);
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
            'index' => ListEventSetups::route('/'),
            'create' => CreateEventSetup::route('/create'),
            'edit' => EditEventSetup::route('/{record}/edit'),
        ];
    }
}
