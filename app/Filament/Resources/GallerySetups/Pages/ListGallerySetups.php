<?php

namespace App\Filament\Resources\GallerySetups\Pages;

use App\Filament\Resources\GallerySetups\GallerySetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGallerySetups extends ListRecords
{
    protected static string $resource = GallerySetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
