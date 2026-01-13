<?php

namespace App\Filament\Resources\SocialSitesManagement\Pages;

use App\Filament\Resources\SocialSitesManagement\SocialSitesManagementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSocialSitesManagement extends EditRecord
{
    protected static string $resource = SocialSitesManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
