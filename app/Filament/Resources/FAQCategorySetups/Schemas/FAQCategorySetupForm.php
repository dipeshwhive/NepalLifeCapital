<?php

namespace App\Filament\Resources\FAQCategorySetups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FAQCategorySetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
