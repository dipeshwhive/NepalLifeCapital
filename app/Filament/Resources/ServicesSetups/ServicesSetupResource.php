<?php

namespace App\Filament\Resources\ServicesSetups;

use App\Filament\Resources\ServicesSetups\Pages\CreateServicesSetup;
use App\Filament\Resources\ServicesSetups\Pages\EditServicesSetup;
use App\Filament\Resources\ServicesSetups\Pages\ListServicesSetups;
use App\Filament\Resources\ServicesSetups\Schemas\ServicesSetupForm;
use App\Filament\Resources\ServicesSetups\Tables\ServicesSetupsTable;
use App\Models\ServicesSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServicesSetupResource extends Resource
{
    protected static ?string $model = ServicesSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShoppingBag;

    protected static ?string $modelLabel = 'Service Setup';

    protected static ?string $navigationLabel = 'Service Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Services & Products';


    protected static ?int $navigationSort = 1;
    public static function form(Schema $schema): Schema
    {
        return ServicesSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesSetupsTable::configure($table);
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
            'index' => ListServicesSetups::route('/'),
            'create' => CreateServicesSetup::route('/create'),
            'edit' => EditServicesSetup::route('/{record}/edit'),
        ];
    }
}
