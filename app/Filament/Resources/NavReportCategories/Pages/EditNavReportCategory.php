<?php

namespace App\Filament\Resources\NavReportCategories\Pages;

use App\Filament\Resources\NavReportCategories\NavReportCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNavReportCategory extends EditRecord
{
    protected static string $resource = NavReportCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
