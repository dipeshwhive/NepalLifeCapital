<?php

namespace App\Filament\Resources\FooterQuickLinks\Pages;

use App\Filament\Resources\FooterQuickLinks\FooterQuickLinksResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFooterQuickLinks extends EditRecord
{
    protected static string $resource = FooterQuickLinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
