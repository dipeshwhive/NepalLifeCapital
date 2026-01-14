<?php

namespace App\Filament\Resources\MessageCPS\Pages;

use App\Filament\Resources\MessageCPS\MessageCPResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMessageCP extends EditRecord
{
    protected static string $resource = MessageCPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
