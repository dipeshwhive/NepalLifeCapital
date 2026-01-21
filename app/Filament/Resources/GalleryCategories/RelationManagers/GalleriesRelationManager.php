<?php

namespace App\Filament\Resources\GalleryCategories\RelationManagers;

use App\Filament\Resources\GallerySetups\GallerySetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class GalleriesRelationManager extends RelationManager
{
    protected static string $relationship = 'galleries';

    protected static ?string $relatedResource = GallerySetupResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
