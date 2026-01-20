<?php

namespace App\Filament\Resources\EventSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class EventSetupForm
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
                FileUpload::make('FeaturedImage')
                    ->required()
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public'),
                DatePicker::make('CreatedDate')
                    ->required(),
                TextInput::make('Slug')
                    ->default(null),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
