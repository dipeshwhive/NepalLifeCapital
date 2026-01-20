<?php

namespace App\Filament\Resources\CompanyResearchSetups\Pages;

use App\Filament\Resources\CompanyResearchSetups\CompanyResearchSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCompanyResearchSetups extends ListRecords
{
    protected static string $resource = CompanyResearchSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
