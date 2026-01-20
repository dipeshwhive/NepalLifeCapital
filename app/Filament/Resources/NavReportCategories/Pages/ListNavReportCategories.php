<?php

namespace App\Filament\Resources\NavReportCategories\Pages;

use App\Filament\Resources\NavReportCategories\NavReportCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNavReportCategories extends ListRecords
{
    protected static string $resource = NavReportCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
