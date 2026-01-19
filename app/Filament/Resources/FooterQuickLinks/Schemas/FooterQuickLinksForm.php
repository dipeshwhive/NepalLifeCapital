<?php

namespace App\Filament\Resources\FooterQuickLinks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FooterQuickLinksForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                TextInput::make('Url')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
