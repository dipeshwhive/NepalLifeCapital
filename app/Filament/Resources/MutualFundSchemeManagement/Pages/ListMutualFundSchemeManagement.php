<?php

namespace App\Filament\Resources\MutualFundSchemeManagement\Pages;

use App\Filament\Resources\MutualFundSchemeManagement\MutualFundSchemeManagementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMutualFundSchemeManagement extends ListRecords
{
    protected static string $resource = MutualFundSchemeManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
