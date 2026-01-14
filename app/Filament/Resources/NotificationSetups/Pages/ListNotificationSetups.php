<?php

namespace App\Filament\Resources\NotificationSetups\Pages;

use App\Filament\Resources\NotificationSetups\NotificationSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNotificationSetups extends ListRecords
{
    protected static string $resource = NotificationSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
