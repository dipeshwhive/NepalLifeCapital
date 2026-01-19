<?php

namespace App\Filament\Resources\ObjectivesSetups\Pages;

use App\Filament\Resources\ObjectivesSetups\ObjectivesSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditObjectivesSetup extends EditRecord
{
    protected static string $resource = ObjectivesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
