<?php

namespace App\Filament\Resources\SliderSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class SliderSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('MainTitle')
                    ->required(),
                TextInput::make('SubTitle')
                    ->required(),
                FileUpload::make('FeaturedImage')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
