<?php

namespace App\Filament\Resources\EventSetups\Pages;

use App\Filament\Resources\EventSetups\EventSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEventSetup extends EditRecord
{
    protected static string $resource = EventSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
