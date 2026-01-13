<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class SiteSettingsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('Favicon')
                    ->label('Favicon')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                FileUpload::make('SiteLogo')
                    ->label('Site Logo')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                TextInput::make('SiteName')
                    ->default(null),
                TextInput::make('Email')
                    ->default(null),
                TextInput::make('Address')
                    ->default(null),
                TextInput::make('PhoneNumber')
                    ->default(null),
                TextInput::make('FooterText')
                    ->default(null),
                TextInput::make('MapLink')
                    ->default(null),
                RichEditor::make('FooterDescription')
                    ->default(null),
                FileUpload::make(name: 'HomeFeaturedImage')
                    ->label('Home Featured Image')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                TextInput::make('HomeTitle')
                    ->default(null),
                TextInput::make('HomeSubTitle')
                    ->default(null),
                TextInput::make('HomeRouteName')
                    ->default(null),
                TextInput::make('NavButtonTitle1')
                    ->default(null),
                TextInput::make('NavButtonsTitle2')
                    ->default(null),
                TextInput::make('NavButtontitle3')
                    ->default(null),
                TextInput::make('NavButtonLink1')
                    ->default(null),
                TextInput::make('NavButtonLink2')
                    ->default(null),
                TextInput::make('NavButtonLink3')
                    ->default(null),
            ]);
    }
}
