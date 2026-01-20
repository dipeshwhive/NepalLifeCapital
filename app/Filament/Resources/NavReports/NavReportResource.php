<?php

namespace App\Filament\Resources\NavReports;

use App\Filament\Resources\NavReports\Pages\CreateNavReport;
use App\Filament\Resources\NavReports\Pages\EditNavReport;
use App\Filament\Resources\NavReports\Pages\ListNavReports;
use App\Filament\Resources\NavReports\Schemas\NavReportForm;
use App\Filament\Resources\NavReports\Tables\NavReportsTable;
use App\Models\NavReport;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NavReportResource extends Resource
{
    protected static ?string $model = NavReport::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static ?string $modelLabel = 'Nav Report';

    protected static ?string $navigationLabel = 'Nav Report';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return NavReportForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NavReportsTable::configure($table);
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
            'index' => ListNavReports::route('/'),
            'create' => CreateNavReport::route('/create'),
            'edit' => EditNavReport::route('/{record}/edit'),
        ];
    }
}
