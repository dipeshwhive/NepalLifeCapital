<?php

namespace App\Filament\Resources\PMSDocumentSetups\Pages;

use App\Filament\Resources\PMSDocumentSetups\PMSDocumentSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPMSDocumentSetup extends EditRecord
{
    protected static string $resource = PMSDocumentSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
