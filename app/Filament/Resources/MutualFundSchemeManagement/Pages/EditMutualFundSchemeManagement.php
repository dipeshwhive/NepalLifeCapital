<?php

namespace App\Filament\Resources\MutualFundSchemeManagement\Pages;

use App\Filament\Resources\MutualFundSchemeManagement\MutualFundSchemeManagementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMutualFundSchemeManagement extends EditRecord
{
    protected static string $resource = MutualFundSchemeManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
