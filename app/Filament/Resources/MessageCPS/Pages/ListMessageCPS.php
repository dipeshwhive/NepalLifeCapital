<?php

namespace App\Filament\Resources\MessageCPS\Pages;

use App\Filament\Resources\MessageCPS\MessageCPResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMessageCPS extends ListRecords
{
    protected static string $resource = MessageCPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
