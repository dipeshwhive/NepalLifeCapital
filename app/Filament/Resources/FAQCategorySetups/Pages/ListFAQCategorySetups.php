<?php

namespace App\Filament\Resources\FAQCategorySetups\Pages;

use App\Filament\Resources\FAQCategorySetups\FAQCategorySetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFAQCategorySetups extends ListRecords
{
    protected static string $resource = FAQCategorySetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
