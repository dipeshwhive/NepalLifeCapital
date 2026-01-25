<?php

namespace App\Filament\Resources\CompanyProfileSetups\Pages;

use App\Filament\Resources\CompanyProfileSetups\CompanyProfileSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCompanyProfileSetup extends EditRecord
{
    protected static string $resource = CompanyProfileSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //DeleteAction::make(),
        ];
    }
}
