<?php

namespace App\Filament\Resources\ObjectivesSetups\Pages;

use App\Filament\Resources\ObjectivesSetups\ObjectivesSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListObjectivesSetups extends ListRecords
{
    protected static string $resource = ObjectivesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
