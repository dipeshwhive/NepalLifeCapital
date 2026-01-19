<?php

namespace App\Filament\Resources\PMSDocumentSetups\Pages;

use App\Filament\Resources\PMSDocumentSetups\PMSDocumentSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPMSDocumentSetups extends ListRecords
{
    protected static string $resource = PMSDocumentSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
