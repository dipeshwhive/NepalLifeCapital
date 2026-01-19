<?php

namespace App\Filament\Resources\FAQSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class FAQSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('CategoryId')
                    ->required()
                    ->relationship('category','Title')
                    ->preload()
                    ->label('Category id')
                    ->searchable(),

                TextInput::make('Questions')
                    ->required(),
                RichEditor::make('Answers')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
