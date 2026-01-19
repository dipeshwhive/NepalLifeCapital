<?php

namespace App\Filament\Resources\YearSetups\Pages;

use App\Filament\Resources\YearSetups\YearSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListYearSetups extends ListRecords
{
    protected static string $resource = YearSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
