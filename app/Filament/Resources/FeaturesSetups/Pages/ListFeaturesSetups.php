<?php

namespace App\Filament\Resources\FeaturesSetups\Pages;

use App\Filament\Resources\FeaturesSetups\FeaturesSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFeaturesSetups extends ListRecords
{
    protected static string $resource = FeaturesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
