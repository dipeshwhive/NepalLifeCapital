<?php

namespace App\Filament\Resources\HomePageSetups;

use App\Filament\Resources\HomePageSetups\Pages\CreateHomePageSetup;
use App\Filament\Resources\HomePageSetups\Pages\EditHomePageSetup;
use App\Filament\Resources\HomePageSetups\Pages\ListHomePageSetups;
use App\Filament\Resources\HomePageSetups\Schemas\HomePageSetupForm;
use App\Filament\Resources\HomePageSetups\Tables\HomePageSetupsTable;
use App\Models\HomePageSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomePageSetupResource extends Resource
{
    protected static ?string $model = HomePageSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Home;

    protected static ?string $modelLabel = 'Home Page Setup';

    protected static ?string $navigationLabel = 'Home Page Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';


    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return HomePageSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomePageSetupsTable::configure($table);
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
            'index' => ListHomePageSetups::route('/'),
            'create' => CreateHomePageSetup::route('/create'),
            'edit' => EditHomePageSetup::route('/{record}/edit'),
        ];
    }
}
