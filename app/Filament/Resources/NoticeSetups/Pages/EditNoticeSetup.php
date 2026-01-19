<?php

namespace App\Filament\Resources\NoticeSetups\Pages;

use App\Filament\Resources\NoticeSetups\NoticeSetupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNoticeSetup extends EditRecord
{
    protected static string $resource = NoticeSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
