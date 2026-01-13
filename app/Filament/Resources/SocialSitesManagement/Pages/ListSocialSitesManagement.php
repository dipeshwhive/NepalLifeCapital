<?php

namespace App\Filament\Resources\SocialSitesManagement\Pages;

use App\Filament\Resources\SocialSitesManagement\SocialSitesManagementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSocialSitesManagement extends ListRecords
{
    protected static string $resource = SocialSitesManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
