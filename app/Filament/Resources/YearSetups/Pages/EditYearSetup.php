<?php

namespace App\Filament\Resources\YearSetups\Pages;

use App\Filament\Resources\YearSetups\YearSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditYearSetup extends EditRecord
{
    protected static string $resource = YearSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
