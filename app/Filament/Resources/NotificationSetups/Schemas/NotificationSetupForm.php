<?php

namespace App\Filament\Resources\NotificationSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;

class NotificationSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('FeaturedImage')
                    ->label('Featured Image')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public'),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
