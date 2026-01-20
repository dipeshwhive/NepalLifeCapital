<?php

namespace App\Filament\Resources\MutualFundReportsSetups\Pages;

use App\Filament\Resources\MutualFundReportsSetups\MutualFundReportsSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMutualFundReportsSetups extends ListRecords
{
    protected static string $resource = MutualFundReportsSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
