<?php

namespace App\Filament\Resources\ManagementTeams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ManagementTeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Name')
                    ->required(),
                TextInput::make('Designation')
                    ->required(),
                RichEditor::make('Description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('FeaturedImage')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->label('Featured Image')
                    ->required(),
                TextInput::make('LinkedinLink')
                    ->required(),
                TextInput::make('Position')
                    ->numeric()
                    ->default(null),
                Toggle::make('IsActive')
                    ->default(true)
                    ->required(),
            ]);
    }
}
