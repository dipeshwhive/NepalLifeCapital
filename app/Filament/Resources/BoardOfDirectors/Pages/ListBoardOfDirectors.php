<?php

namespace App\Filament\Resources\BoardOfDirectors\Pages;

use App\Filament\Resources\BoardOfDirectors\BoardOfDirectorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBoardOfDirectors extends ListRecords
{
    protected static string $resource = BoardOfDirectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
