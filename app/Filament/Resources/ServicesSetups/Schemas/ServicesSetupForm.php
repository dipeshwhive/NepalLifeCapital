<?php

namespace App\Filament\Resources\ServicesSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ServicesSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                RichEditor::make('Description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('Slug')
                    ->label('URL Slug'),
                TextInput::make('SubTitle1')
                    ->default(null),
                RichEditor::make('SubDescription1')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('SubTitle2')
                    ->default(null),
                RichEditor::make('SubDescription2')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('FeaturedImage')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                Select::make('ServiceCategory')
                    ->options([
                        'primary' => 'Primary',
                        'mutual'=> 'Mutual',
                    ]),
                Toggle::make('ShowInHomePage')
                    ->required(),
                TextInput::make('Route')
                    ->default(null),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
