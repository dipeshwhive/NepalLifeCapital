<?php

namespace App\Filament\Resources\InvestmentPeriodSetups\Pages;

use App\Filament\Resources\InvestmentPeriodSetups\InvestmentPeriodSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInvestmentPeriodSetups extends ListRecords
{
    protected static string $resource = InvestmentPeriodSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
