<?php

namespace App\Filament\Resources\SliderSetups\Pages;

use App\Filament\Resources\SliderSetups\SliderSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSliderSetups extends ListRecords
{
    protected static string $resource = SliderSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
