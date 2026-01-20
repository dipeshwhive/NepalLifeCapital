<?php

namespace App\Filament\Resources\NavReports\Pages;

use App\Filament\Resources\NavReports\NavReportResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNavReport extends EditRecord
{
    protected static string $resource = NavReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
