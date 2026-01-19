<?php

namespace App\Filament\Resources\TestimonialManagement\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class TestimonialManagementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Name')
                    ->required(),
                TextInput::make('Designation')
                    ->required(),
                RichEditor::make('Message')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
