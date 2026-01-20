<?php

namespace App\Filament\Resources\MutualFundReportsSetups;

use App\Filament\Resources\MutualFundReportsSetups\Pages\CreateMutualFundReportsSetup;
use App\Filament\Resources\MutualFundReportsSetups\Pages\EditMutualFundReportsSetup;
use App\Filament\Resources\MutualFundReportsSetups\Pages\ListMutualFundReportsSetups;
use App\Filament\Resources\MutualFundReportsSetups\Schemas\MutualFundReportsSetupForm;
use App\Filament\Resources\MutualFundReportsSetups\Tables\MutualFundReportsSetupsTable;
use App\Models\MutualFundReportsSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MutualFundReportsSetupResource extends Resource
{
    protected static ?string $model = MutualFundReportsSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartPie;

    protected static ?string $modelLabel = 'Mutual Fund Report Setup';

    protected static ?string $navigationLabel = 'Mutual Fund Report Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return MutualFundReportsSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MutualFundReportsSetupsTable::configure($table);
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
            'index' => ListMutualFundReportsSetups::route('/'),
            'create' => CreateMutualFundReportsSetup::route('/create'),
            'edit' => EditMutualFundReportsSetup::route('/{record}/edit'),
        ];
    }
}
