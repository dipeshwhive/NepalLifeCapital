<?php

namespace App\Filament\Resources\HomePageSetups\Pages;

use App\Filament\Resources\HomePageSetups\HomePageSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomePageSetup extends EditRecord
{
    protected static string $resource = HomePageSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
