<?php

namespace App\Filament\Resources\NoticeSetups\Pages;

use App\Filament\Resources\NoticeSetups\NoticeSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNoticeSetups extends ListRecords
{
    protected static string $resource = NoticeSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
