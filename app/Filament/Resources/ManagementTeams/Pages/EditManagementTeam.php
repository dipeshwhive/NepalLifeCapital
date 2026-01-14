<?php

namespace App\Filament\Resources\ManagementTeams\Pages;

use App\Filament\Resources\ManagementTeams\ManagementTeamResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditManagementTeam extends EditRecord
{
    protected static string $resource = ManagementTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
