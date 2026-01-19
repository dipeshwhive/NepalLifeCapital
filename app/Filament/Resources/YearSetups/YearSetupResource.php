<?php

namespace App\Filament\Resources\YearSetups;

use App\Filament\Resources\YearSetups\Pages\CreateYearSetup;
use App\Filament\Resources\YearSetups\Pages\EditYearSetup;
use App\Filament\Resources\YearSetups\Pages\ListYearSetups;
use App\Filament\Resources\YearSetups\Schemas\YearSetupForm;
use App\Filament\Resources\YearSetups\Tables\YearSetupsTable;
use App\Models\YearSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class YearSetupResource extends Resource
{
    protected static ?string $model = YearSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Calendar;

    protected static ?string $modelLabel = 'Year Setup';

    protected static ?string $navigationLabel = 'Year Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return YearSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return YearSetupsTable::configure($table);
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
            'index' => ListYearSetups::route('/'),
            'create' => CreateYearSetup::route('/create'),
            'edit' => EditYearSetup::route('/{record}/edit'),
        ];
    }
}
