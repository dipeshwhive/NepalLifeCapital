<?php

namespace App\Filament\Resources\FeaturesSetups\Pages;

use App\Filament\Resources\FeaturesSetups\FeaturesSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFeaturesSetup extends EditRecord
{
    protected static string $resource = FeaturesSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
