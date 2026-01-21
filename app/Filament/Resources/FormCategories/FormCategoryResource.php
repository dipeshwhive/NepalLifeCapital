<?php

namespace App\Filament\Resources\FormCategories;

use UnitEnum;
use BackedEnum;
use Filament\Tables\Table;
use App\Models\FormCategory;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\FormCategories\Pages\EditFormCategory;
use App\Filament\Resources\FormCategories\Pages\CreateFormCategory;
use App\Filament\Resources\FormCategories\Pages\ListFormCategories;
use App\Filament\Resources\FormCategories\Schemas\FormCategoryForm;
use App\Filament\Resources\FormCategories\Tables\FormCategoriesTable;
use App\Filament\Resources\FormCategories\RelationManagers\ListRelationManager;

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
            ListRelationManager::class,
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
