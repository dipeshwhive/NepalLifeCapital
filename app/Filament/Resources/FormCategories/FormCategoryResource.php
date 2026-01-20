<?php

namespace App\Filament\Resources\FormCategories;

use App\Filament\Resources\FormCategories\Pages\CreateFormCategory;
use App\Filament\Resources\FormCategories\Pages\EditFormCategory;
use App\Filament\Resources\FormCategories\Pages\ListFormCategories;
use App\Filament\Resources\FormCategories\Schemas\FormCategoryForm;
use App\Filament\Resources\FormCategories\Tables\FormCategoriesTable;
use App\Models\FormCategory;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FormCategoryResource extends Resource
{
    protected static ?string $model = FormCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocument;

    protected static ?string $modelLabel = 'Form Category';

    protected static ?string $navigationLabel = 'Form Category';

    protected static string|UnitEnum|null $navigationGroup = 'Form Management';


    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return FormCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FormCategoriesTable::configure($table);
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
            'index' => ListFormCategories::route('/'),
            'create' => CreateFormCategory::route('/create'),
            'edit' => EditFormCategory::route('/{record}/edit'),
        ];
    }
}
