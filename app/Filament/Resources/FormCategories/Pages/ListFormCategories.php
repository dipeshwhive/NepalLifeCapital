<?php

namespace App\Filament\Resources\FormCategories\Pages;

use App\Filament\Resources\FormCategories\FormCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFormCategories extends ListRecords
{
    protected static string $resource = FormCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
