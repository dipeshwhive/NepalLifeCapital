<?php

namespace App\Filament\Resources\GalleryCategories;

use UnitEnum;
use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\GalleryCategory;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\GalleryCategories\Pages\EditGalleryCategory;
use App\Filament\Resources\GalleryCategories\Pages\CreateGalleryCategory;
use App\Filament\Resources\GalleryCategories\Pages\ListGalleryCategories;
use App\Filament\Resources\GalleryCategories\Schemas\GalleryCategoryForm;
use App\Filament\Resources\GalleryCategories\Tables\GalleryCategoriesTable;
use App\Filament\Resources\GalleryCategories\RelationManagers\GalleriesRelationManager;

class GalleryCategoryResource extends Resource
{
    protected static ?string $model = GalleryCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArchiveBox;

    protected static ?string $modelLabel = 'Gallery Category';

    protected static ?string $navigationLabel = 'Gallery Category';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 7;

    public static function form(Schema $schema): Schema
    {
        return GalleryCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            GalleriesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleryCategories::route('/'),
            'create' => CreateGalleryCategory::route('/create'),
            'edit' => EditGalleryCategory::route('/{record}/edit'),
        ];
    }
}
