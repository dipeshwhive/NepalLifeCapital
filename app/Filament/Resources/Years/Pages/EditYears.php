<?php

namespace App\Filament\Resources\Years\Pages;

use App\Filament\Resources\Years\YearsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditYears extends EditRecord
{
    protected static string $resource = YearsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
