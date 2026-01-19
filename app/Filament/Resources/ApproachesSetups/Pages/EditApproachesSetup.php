<?php

namespace App\Filament\Resources\ApproachesSetups\Pages;

use App\Filament\Resources\ApproachesSetups\ApproachesSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditApproachesSetup extends EditRecord
{
    protected static string $resource = ApproachesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
