<?php

namespace App\Filament\Resources\ServicesSetups\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

class ServicesSetupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Title')
                    ->searchable(),
                ImageColumn::make('FeaturedImage')
                    ->searchable()
                    ->disk('public_direct'),
                TextColumn::make('ServiceCategory')
                    ->searchable(),
                ToggleColumn::make('ShowInHomePage')
                    ->label('Active')
                    ->onColor('success')
                    ->offColor('danger'),
                ToggleColumn::make('IsActive')
                    ->label('Active')   
                    ->onColor('success')
                    ->offColor('danger'),
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
