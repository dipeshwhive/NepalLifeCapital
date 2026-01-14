<?php

namespace App\Filament\Resources\CompanyProfileSetups\Pages;

use App\Filament\Resources\CompanyProfileSetups\CompanyProfileSetupResource;
use App\Models\CompanyProfileSetup;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCompanyProfileSetups extends ListRecords
{
    protected static string $resource = CompanyProfileSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
    public function mount(): void
    {
        $companyProfileSetups = CompanyProfileSetup::first();

        redirect(
            CompanyProfileSetupResource::getUrl('edit', [
                'record' => $companyProfileSetups,
            ])
        );
    }
}
