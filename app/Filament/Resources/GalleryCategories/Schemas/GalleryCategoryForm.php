<?php

namespace App\Filament\Resources\GalleryCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryCategoryForm
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
