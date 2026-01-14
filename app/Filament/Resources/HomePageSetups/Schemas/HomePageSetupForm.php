<?php

namespace App\Filament\Resources\HomePageSetups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class HomePageSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title1')
                    ->default(null),
                RichEditor::make('Description1')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('Slug1')
                    ->default(null),
                TextInput::make('Title2')
                    ->default(null),
                RichEditor::make('Description2')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('Route2')
                    ->default(null),
                TextInput::make('Slug2')
                    ->default(null),
                TextInput::make('Title3')
                    ->default(null),
                RichEditor::make('Description3')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('FeaturedImage3')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                TextInput::make('Slug3')
                    ->default(null),
                TextInput::make('Route3')
                    ->default(null),
                TextInput::make('Title4')
                    ->default(null),
                RichEditor::make('Description4')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('Route4')
                    ->default(null),
                TextInput::make('Slug4')
                    ->default(null),
                Toggle::make('Is_active')
                    ->required(),
            ]);
    }
}
