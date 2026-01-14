<?php

namespace App\Filament\Resources\OurProcessSetups\Pages;

use App\Filament\Resources\OurProcessSetups\OurProcessSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurProcessSetups extends ListRecords
{
    protected static string $resource = OurProcessSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
