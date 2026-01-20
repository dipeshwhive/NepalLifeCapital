<?php

namespace App\Filament\Resources\FormLists\Pages;

use App\Filament\Resources\FormLists\FormListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFormLists extends ListRecords
{
    protected static string $resource = FormListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
