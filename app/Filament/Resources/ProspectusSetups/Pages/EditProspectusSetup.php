<?php

namespace App\Filament\Resources\ProspectusSetups\Pages;

use App\Filament\Resources\ProspectusSetups\ProspectusSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProspectusSetup extends EditRecord
{
    protected static string $resource = ProspectusSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
