<?php

namespace App\Filament\Resources\HomePageSetups\Pages;

use App\Filament\Resources\HomePageSetups\HomePageSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomePageSetups extends ListRecords
{
    protected static string $resource = HomePageSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
