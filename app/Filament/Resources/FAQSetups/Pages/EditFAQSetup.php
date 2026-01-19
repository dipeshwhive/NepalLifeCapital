<?php

namespace App\Filament\Resources\FAQSetups\Pages;

use App\Filament\Resources\FAQSetups\FAQSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFAQSetup extends EditRecord
{
    protected static string $resource = FAQSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
