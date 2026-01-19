<?php

namespace App\Filament\Resources\PortfolioProductsSetups\Pages;

use App\Filament\Resources\PortfolioProductsSetups\PortfolioProductsSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioProductsSetup extends EditRecord
{
    protected static string $resource = PortfolioProductsSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
