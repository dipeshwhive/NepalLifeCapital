<?php

namespace App\Filament\Resources\ConsultationSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ConsultationSetupForm
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
                    ->label('Featured Image')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
