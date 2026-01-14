<?php

namespace App\Filament\Resources\NotificationSetups\Pages;

use App\Filament\Resources\NotificationSetups\NotificationSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNotificationSetup extends EditRecord
{
    protected static string $resource = NotificationSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
