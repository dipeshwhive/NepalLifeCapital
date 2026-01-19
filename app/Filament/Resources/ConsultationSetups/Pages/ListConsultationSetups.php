<?php

namespace App\Filament\Resources\ConsultationSetups\Pages;

use App\Filament\Resources\ConsultationSetups\ConsultationSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConsultationSetups extends ListRecords
{
    protected static string $resource = ConsultationSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
