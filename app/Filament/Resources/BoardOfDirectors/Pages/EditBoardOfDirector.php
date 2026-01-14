<?php

namespace App\Filament\Resources\BoardOfDirectors\Pages;

use App\Filament\Resources\BoardOfDirectors\BoardOfDirectorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBoardOfDirector extends EditRecord
{
    protected static string $resource = BoardOfDirectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
