<?php

namespace App\Filament\Resources\CompanyProfileSetups;

use App\Filament\Resources\CompanyProfileSetups\Pages\CreateCompanyProfileSetup;
use App\Filament\Resources\CompanyProfileSetups\Pages\EditCompanyProfileSetup;
use App\Filament\Resources\CompanyProfileSetups\Pages\ListCompanyProfileSetups;
use App\Filament\Resources\CompanyProfileSetups\Schemas\CompanyProfileSetupForm;
use App\Filament\Resources\CompanyProfileSetups\Tables\CompanyProfileSetupsTable;
use App\Models\CompanyProfileSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyProfileSetupResource extends Resource
{
    protected static ?string $model = CompanyProfileSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cog;

    protected static ?string $modelLabel = 'Company Profile Setup';

    protected static ?string $navigationLabel = 'Company Profile Setup';

    protected static string|UnitEnum|null $navigationGroup = 'About Page';


    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return CompanyProfileSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyProfileSetupsTable::configure($table);
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
            'index' => ListCompanyProfileSetups::route('/'),
            'create' => CreateCompanyProfileSetup::route('/create'),
            'edit' => EditCompanyProfileSetup::route('/{record}/edit'),
        ];
    }
}
