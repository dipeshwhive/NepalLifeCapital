<?php

namespace App\Filament\Resources\SliderSetups\Pages;

use App\Filament\Resources\SliderSetups\SliderSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSliderSetup extends EditRecord
{
    protected static string $resource = SliderSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
