<?php

namespace App\Filament\Resources\GallerySetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;

class GallerySetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('FeaturedImage')
                    ->required()
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public'),
                Select::make('Category_id')
                    ->relationship('category','Title')
                    ->searchable()
                    ->preload(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
