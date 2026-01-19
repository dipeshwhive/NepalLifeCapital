<?php

namespace App\Filament\Resources\FAQCategorySetups\Pages;

use App\Filament\Resources\FAQCategorySetups\FAQCategorySetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFAQCategorySetup extends EditRecord
{
    protected static string $resource = FAQCategorySetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
