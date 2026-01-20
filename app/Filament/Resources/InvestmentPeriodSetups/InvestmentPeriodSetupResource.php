<?php

namespace App\Filament\Resources\InvestmentPeriodSetups;

use App\Filament\Resources\InvestmentPeriodSetups\Pages\CreateInvestmentPeriodSetup;
use App\Filament\Resources\InvestmentPeriodSetups\Pages\EditInvestmentPeriodSetup;
use App\Filament\Resources\InvestmentPeriodSetups\Pages\ListInvestmentPeriodSetups;
use App\Filament\Resources\InvestmentPeriodSetups\Schemas\InvestmentPeriodSetupForm;
use App\Filament\Resources\InvestmentPeriodSetups\Tables\InvestmentPeriodSetupsTable;
use App\Models\InvestmentPeriodSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InvestmentPeriodSetupResource extends Resource
{
    protected static ?string $model = InvestmentPeriodSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Calculator;

    protected static ?string $modelLabel = 'Company Research Setup';

    protected static ?string $navigationLabel = 'Investment Period';

    protected static string|UnitEnum|null $navigationGroup = 'Calculator';


    protected static ?int $navigationSort = 1;
    public static function form(Schema $schema): Schema
    {
        return InvestmentPeriodSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InvestmentPeriodSetupsTable::configure($table);
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
            'index' => ListInvestmentPeriodSetups::route('/'),
            'create' => CreateInvestmentPeriodSetup::route('/create'),
            'edit' => EditInvestmentPeriodSetup::route('/{record}/edit'),
        ];
    }
}
