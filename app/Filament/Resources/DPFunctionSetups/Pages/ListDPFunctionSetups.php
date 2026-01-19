<?php

namespace App\Filament\Resources\DPFunctionSetups\Pages;

use App\Filament\Resources\DPFunctionSetups\DPFunctionSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDPFunctionSetups extends ListRecords
{
    protected static string $resource = DPFunctionSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
