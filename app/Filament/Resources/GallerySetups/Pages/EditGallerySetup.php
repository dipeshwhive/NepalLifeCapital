<?php

namespace App\Filament\Resources\GallerySetups\Pages;

use App\Filament\Resources\GallerySetups\GallerySetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGallerySetup extends EditRecord
{
    protected static string $resource = GallerySetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
