<?php

namespace App\Filament\Resources\GallerySetups;

use App\Filament\Resources\GallerySetups\Pages\CreateGallerySetup;
use App\Filament\Resources\GallerySetups\Pages\EditGallerySetup;
use App\Filament\Resources\GallerySetups\Pages\ListGallerySetups;
use App\Filament\Resources\GallerySetups\Schemas\GallerySetupForm;
use App\Filament\Resources\GallerySetups\Tables\GallerySetupsTable;
use App\Models\GallerySetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GallerySetupResource extends Resource
{
    protected static ?string $model = GallerySetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Photo;

    protected static ?string $modelLabel = 'Gallery Setup';

    protected static ?string $navigationLabel = 'Gallery Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 8;

    public static function form(Schema $schema): Schema
    {
        return GallerySetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GallerySetupsTable::configure($table);
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
            'index' => ListGallerySetups::route('/'),
            'create' => CreateGallerySetup::route('/create'),
            'edit' => EditGallerySetup::route('/{record}/edit'),
        ];
    }
}
