<?php

namespace App\Filament\Resources\NoticeSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class NoticeSetupForm
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
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->default(null),
                DatePicker::make('CreatedDate')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
