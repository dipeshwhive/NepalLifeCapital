<?php

namespace App\Filament\Resources\NavReports\Pages;

use App\Filament\Resources\NavReports\NavReportResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNavReports extends ListRecords
{
    protected static string $resource = NavReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
