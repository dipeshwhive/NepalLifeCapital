<?php

namespace App\Filament\Resources\HomePageSetups\Pages;

use App\Models\HomePageSetup;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\HomePageSetups\HomePageSetupResource;

class ListHomePageSetups extends ListRecords
{
    protected static string $resource = HomePageSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
    public function mount(): void
    {
        $homePageSetup = HomePageSetup::first();

        redirect(
            HomePageSetupResource::getUrl('edit', [
                'record' => $homePageSetup,
            ])
        );
    }
}
