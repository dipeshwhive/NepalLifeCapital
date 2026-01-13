<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('Favicon')
                    ->disk('public_direct')
                    ->circular()
                    ->label('Favicon'),
                ImageColumn::make('SiteLogo')
                    ->disk('public_direct')
                    ->circular()
                    ->label('Site Logo'),
                TextColumn::make('SiteName')
                    ->searchable(),
                TextColumn::make('Email')
                    ->searchable(),
                TextColumn::make('Address')
                    ->searchable(),
                TextColumn::make('PhoneNumber')
                    ->searchable(),
                TextColumn::make('FooterText')
                    ->searchable(),
                TextColumn::make('MapLink')
                    ->searchable(),
                TextColumn::make('FooterDescription')
                    ->searchable(),
                ImageColumn::make('HomeFeaturedImage')
                    ->disk('public_direct')
                    ->circular()
                    ->label('Home Featured Image'),
                TextColumn::make('HomeTitle')
                    ->searchable(),
                TextColumn::make('HomeSubTitle')
                    ->searchable(),
                TextColumn::make('HomeRouteName')
                    ->searchable(),
                TextColumn::make('NavButtonTitle1')
                    ->searchable(),
                TextColumn::make('NavButtonsTitle2')
                    ->searchable(),
                TextColumn::make('NavButtontitle3')
                    ->searchable(),
                TextColumn::make('NavButtonLink1')
                    ->searchable(),
                TextColumn::make('NavButtonLink2')
                    ->searchable(),
                TextColumn::make('NavButtonLink3')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //DeleteBulkAction::make(),
                ]),
            ]);
    }
}
