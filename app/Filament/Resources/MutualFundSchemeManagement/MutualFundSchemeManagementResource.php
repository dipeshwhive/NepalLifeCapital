<?php

namespace App\Filament\Resources\MutualFundSchemeManagement;

use App\Filament\Resources\MutualFundSchemeManagement\Pages\CreateMutualFundSchemeManagement;
use App\Filament\Resources\MutualFundSchemeManagement\Pages\EditMutualFundSchemeManagement;
use App\Filament\Resources\MutualFundSchemeManagement\Pages\ListMutualFundSchemeManagement;
use App\Filament\Resources\MutualFundSchemeManagement\Schemas\MutualFundSchemeManagementForm;
use App\Filament\Resources\MutualFundSchemeManagement\Tables\MutualFundSchemeManagementTable;
use App\Models\MutualFundSchemeManagement;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MutualFundSchemeManagementResource extends Resource
{
    protected static ?string $model = MutualFundSchemeManagement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArchiveBoxXMark;

    protected static ?string $modelLabel = 'Mutual Fund Scheme Management';

    protected static ?string $navigationLabel = 'Mutual Fund Scheme Management';

    protected static string|UnitEnum|null $navigationGroup = 'Mutual Scheme Setup';


    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return MutualFundSchemeManagementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MutualFundSchemeManagementTable::configure($table);
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
            'index' => ListMutualFundSchemeManagement::route('/'),
            'create' => CreateMutualFundSchemeManagement::route('/create'),
            'edit' => EditMutualFundSchemeManagement::route('/{record}/edit'),
        ];
    }
}
