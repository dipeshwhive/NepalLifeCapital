<?php

namespace App\Filament\Resources\FooterQuickLinks\Pages;

use App\Filament\Resources\FooterQuickLinks\FooterQuickLinksResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFooterQuickLinks extends ListRecords
{
    protected static string $resource = FooterQuickLinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
