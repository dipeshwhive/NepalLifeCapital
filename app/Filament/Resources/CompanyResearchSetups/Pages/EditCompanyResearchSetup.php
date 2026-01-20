<?php

namespace App\Filament\Resources\CompanyResearchSetups\Pages;

use App\Filament\Resources\CompanyResearchSetups\CompanyResearchSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCompanyResearchSetup extends EditRecord
{
    protected static string $resource = CompanyResearchSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
