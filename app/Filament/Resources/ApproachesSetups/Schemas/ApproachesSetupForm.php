<?php

namespace App\Filament\Resources\ApproachesSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class ApproachesSetupForm
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
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
