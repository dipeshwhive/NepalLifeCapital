<?php

namespace App\Filament\Resources\EventSetups\Pages;

use App\Filament\Resources\EventSetups\EventSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEventSetups extends ListRecords
{
    protected static string $resource = EventSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
