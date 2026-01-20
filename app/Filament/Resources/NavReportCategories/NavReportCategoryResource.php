<?php

namespace App\Filament\Resources\NavReportCategories;

use App\Filament\Resources\NavReportCategories\Pages\CreateNavReportCategory;
use App\Filament\Resources\NavReportCategories\Pages\EditNavReportCategory;
use App\Filament\Resources\NavReportCategories\Pages\ListNavReportCategories;
use App\Filament\Resources\NavReportCategories\Schemas\NavReportCategoryForm;
use App\Filament\Resources\NavReportCategories\Tables\NavReportCategoriesTable;
use App\Models\NavReportCategory;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NavReportCategoryResource extends Resource
{
    protected static ?string $model = NavReportCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDivide;

    protected static ?string $modelLabel = 'Nav Report Category';

    protected static ?string $navigationLabel = 'Nav Report Category';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return NavReportCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NavReportCategoriesTable::configure($table);
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
            'index' => ListNavReportCategories::route('/'),
            'create' => CreateNavReportCategory::route('/create'),
            'edit' => EditNavReportCategory::route('/{record}/edit'),
        ];
    }
}
