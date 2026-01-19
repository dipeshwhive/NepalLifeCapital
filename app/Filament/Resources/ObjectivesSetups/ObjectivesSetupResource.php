<?php

namespace App\Filament\Resources\ObjectivesSetups;

use App\Filament\Resources\ObjectivesSetups\Pages\CreateObjectivesSetup;
use App\Filament\Resources\ObjectivesSetups\Pages\EditObjectivesSetup;
use App\Filament\Resources\ObjectivesSetups\Pages\ListObjectivesSetups;
use App\Filament\Resources\ObjectivesSetups\Schemas\ObjectivesSetupForm;
use App\Filament\Resources\ObjectivesSetups\Tables\ObjectivesSetupsTable;
use App\Models\ObjectivesSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ObjectivesSetupResource extends Resource
{
    protected static ?string $model = ObjectivesSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static ?string $modelLabel = 'Objectives Setup';

    protected static ?string $navigationLabel = 'Objectives Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 9;

    public static function form(Schema $schema): Schema
    {
        return ObjectivesSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ObjectivesSetupsTable::configure($table);
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
            'index' => ListObjectivesSetups::route('/'),
            'create' => CreateObjectivesSetup::route('/create'),
            'edit' => EditObjectivesSetup::route('/{record}/edit'),
        ];
    }
}
