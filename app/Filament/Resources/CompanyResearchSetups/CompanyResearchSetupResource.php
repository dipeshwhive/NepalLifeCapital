<?php

namespace App\Filament\Resources\CompanyResearchSetups;

use App\Filament\Resources\CompanyResearchSetups\Pages\CreateCompanyResearchSetup;
use App\Filament\Resources\CompanyResearchSetups\Pages\EditCompanyResearchSetup;
use App\Filament\Resources\CompanyResearchSetups\Pages\ListCompanyResearchSetups;
use App\Filament\Resources\CompanyResearchSetups\Schemas\CompanyResearchSetupForm;
use App\Filament\Resources\CompanyResearchSetups\Tables\CompanyResearchSetupsTable;
use App\Models\CompanyResearchSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyResearchSetupResource extends Resource
{
    protected static ?string $model = CompanyResearchSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalculator;

    protected static ?string $modelLabel = 'Company Research Setup';

    protected static ?string $navigationLabel = 'Company Research Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return CompanyResearchSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyResearchSetupsTable::configure($table);
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
            'index' => ListCompanyResearchSetups::route('/'),
            'create' => CreateCompanyResearchSetup::route('/create'),
            'edit' => EditCompanyResearchSetup::route('/{record}/edit'),
        ];
    }
}
