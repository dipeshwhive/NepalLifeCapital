<?php

namespace App\Filament\Resources\FormLists\Pages;

use App\Filament\Resources\FormLists\FormListResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFormList extends EditRecord
{
    protected static string $resource = FormListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
