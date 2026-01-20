<?php

namespace App\Filament\Resources\MutualFundReportsSetups\Pages;

use App\Filament\Resources\MutualFundReportsSetups\MutualFundReportsSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMutualFundReportsSetup extends EditRecord
{
    protected static string $resource = MutualFundReportsSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
