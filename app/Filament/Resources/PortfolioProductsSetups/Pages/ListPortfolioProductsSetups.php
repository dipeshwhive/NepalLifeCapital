<?php

namespace App\Filament\Resources\PortfolioProductsSetups\Pages;

use App\Filament\Resources\PortfolioProductsSetups\PortfolioProductsSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioProductsSetups extends ListRecords
{
    protected static string $resource = PortfolioProductsSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
