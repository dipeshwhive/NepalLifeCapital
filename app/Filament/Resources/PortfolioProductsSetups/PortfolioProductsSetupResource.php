<?php

namespace App\Filament\Resources\PortfolioProductsSetups;

use App\Filament\Resources\PortfolioProductsSetups\Pages\CreatePortfolioProductsSetup;
use App\Filament\Resources\PortfolioProductsSetups\Pages\EditPortfolioProductsSetup;
use App\Filament\Resources\PortfolioProductsSetups\Pages\ListPortfolioProductsSetups;
use App\Filament\Resources\PortfolioProductsSetups\Schemas\PortfolioProductsSetupForm;
use App\Filament\Resources\PortfolioProductsSetups\Tables\PortfolioProductsSetupsTable;
use App\Models\PortfolioProductsSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PortfolioProductsSetupResource extends Resource
{
    protected static ?string $model = PortfolioProductsSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentCurrencyDollar;

    protected static ?string $modelLabel = 'Portfolio Products Setup';

    protected static ?string $navigationLabel = 'Portfolio Products Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Services & Products';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return PortfolioProductsSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortfolioProductsSetupsTable::configure($table);
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
            'index' => ListPortfolioProductsSetups::route('/'),
            'create' => CreatePortfolioProductsSetup::route('/create'),
            'edit' => EditPortfolioProductsSetup::route('/{record}/edit'),
        ];
    }
}
