<?php

namespace App\Filament\Resources\ContactLists\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class ContactListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Name')
                    ->required(),
                TextInput::make('Email')
                    ->required(),
                TextInput::make('PhoneNumber')
                    ->required(),
                RichEditor::make('Message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
