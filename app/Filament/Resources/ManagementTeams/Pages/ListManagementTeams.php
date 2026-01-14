<?php

namespace App\Filament\Resources\ManagementTeams\Pages;

use App\Filament\Resources\ManagementTeams\ManagementTeamResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListManagementTeams extends ListRecords
{
    protected static string $resource = ManagementTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
