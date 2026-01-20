<?php

namespace App\Filament\Resources\ProspectusSetups\Pages;

use App\Filament\Resources\ProspectusSetups\ProspectusSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProspectusSetups extends ListRecords
{
    protected static string $resource = ProspectusSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
