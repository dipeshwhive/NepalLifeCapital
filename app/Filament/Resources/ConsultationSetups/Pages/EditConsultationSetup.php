<?php

namespace App\Filament\Resources\ConsultationSetups\Pages;

use App\Filament\Resources\ConsultationSetups\ConsultationSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditConsultationSetup extends EditRecord
{
    protected static string $resource = ConsultationSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
