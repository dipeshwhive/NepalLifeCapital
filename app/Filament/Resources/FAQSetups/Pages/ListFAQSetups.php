<?php

namespace App\Filament\Resources\FAQSetups\Pages;

use App\Filament\Resources\FAQSetups\FAQSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFAQSetups extends ListRecords
{
    protected static string $resource = FAQSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
