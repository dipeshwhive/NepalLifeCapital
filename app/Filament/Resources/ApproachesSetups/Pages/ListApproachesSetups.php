<?php

namespace App\Filament\Resources\ApproachesSetups\Pages;

use App\Filament\Resources\ApproachesSetups\ApproachesSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListApproachesSetups extends ListRecords
{
    protected static string $resource = ApproachesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
