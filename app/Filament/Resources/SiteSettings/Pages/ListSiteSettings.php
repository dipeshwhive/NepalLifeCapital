<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Models\SiteSettings;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\SiteSettings\SiteSettingsResource;

class ListSiteSettings extends ListRecords
{
    protected static string $resource = SiteSettingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
    public function mount(): void
    {
        $siteSettings = SiteSettings::first();

        redirect(
            SiteSettingsResource::getUrl('edit', [
                'record' => $siteSettings,
            ])
        );
    }
}
