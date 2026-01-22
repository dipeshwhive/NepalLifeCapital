<?php

namespace App\Filament\Resources\Years\Pages;

use App\Filament\Resources\Years\YearsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListYears extends ListRecords
{
    protected static string $resource = YearsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
