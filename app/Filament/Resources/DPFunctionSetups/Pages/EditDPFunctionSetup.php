<?php

namespace App\Filament\Resources\DPFunctionSetups\Pages;

use App\Filament\Resources\DPFunctionSetups\DPFunctionSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDPFunctionSetup extends EditRecord
{
    protected static string $resource = DPFunctionSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
