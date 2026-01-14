<?php

namespace App\Filament\Resources\CompanyProfileSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class CompanyProfileSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->nullable()
                    ->default(null),
                TextInput::make('SubTitle')
                    ->nullable()
                    ->default(null),
                RichEditor::make('Description')
                    ->nullable()
                    ->default(null),
                RichEditor::make('Mission')
                    ->nullable()
                    ->default(null),
                RichEditor::make('Vision')
                    ->nullable()
                    ->default(null),
                FileUpload::make('FeaturedImage')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->default(null)
                    ->nullable(),
                Toggle::make('IsActive')
                    ->required()
                    ->default(true),
            ]);
    }
}
