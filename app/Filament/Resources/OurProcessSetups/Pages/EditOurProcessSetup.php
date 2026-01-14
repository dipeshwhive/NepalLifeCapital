<?php

namespace App\Filament\Resources\OurProcessSetups\Pages;

use App\Filament\Resources\OurProcessSetups\OurProcessSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurProcessSetup extends EditRecord
{
    protected static string $resource = OurProcessSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
