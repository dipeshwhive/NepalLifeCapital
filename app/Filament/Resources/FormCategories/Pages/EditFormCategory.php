<?php

namespace App\Filament\Resources\FormCategories\Pages;

use App\Filament\Resources\FormCategories\FormCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFormCategory extends EditRecord
{
    protected static string $resource = FormCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
