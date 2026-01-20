<?php

namespace App\Filament\Resources\InvestmentPeriodSetups\Pages;

use App\Filament\Resources\InvestmentPeriodSetups\InvestmentPeriodSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInvestmentPeriodSetup extends EditRecord
{
    protected static string $resource = InvestmentPeriodSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
