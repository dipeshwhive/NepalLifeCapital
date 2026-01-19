<?php

namespace App\Filament\Resources\ServicesSetups\Pages;

use App\Filament\Resources\ServicesSetups\ServicesSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicesSetup extends EditRecord
{
    protected static string $resource = ServicesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
