<?php

namespace App\Filament\Resources\ServicesSetups\Pages;

use App\Filament\Resources\ServicesSetups\ServicesSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesSetups extends ListRecords
{
    protected static string $resource = ServicesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
