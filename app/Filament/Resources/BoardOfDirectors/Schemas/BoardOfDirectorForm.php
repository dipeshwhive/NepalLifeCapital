<?php

namespace App\Filament\Resources\BoardOfDirectors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class BoardOfDirectorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Name')
                    ->required(),
                TextInput::make('Designation')
                    ->required(),
                FileUpload::make('Featured Image')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                Toggle::make('Is Active')
                    ->label('Active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
