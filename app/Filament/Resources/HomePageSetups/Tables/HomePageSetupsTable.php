<?php

namespace App\Filament\Resources\HomePageSetups\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class HomePageSetupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Title1')
                    ->searchable(),
                TextColumn::make('Slug1')
                    ->searchable(),
                TextColumn::make('Title2')
                    ->searchable(),
                TextColumn::make('Route2')
                    ->searchable(),
                TextColumn::make('Slug2')
                    ->searchable(),
                TextColumn::make('Title3')
                    ->searchable(),
                ImageColumn::make('FeaturedImage3')
                    ->disk('public_direct')
                    ->circular()
                    ->searchable(),
                TextColumn::make('Slug3')
                    ->searchable(),
                TextColumn::make('Route3')
                    ->searchable(),
                TextColumn::make('Title4')
                    ->searchable(),
                TextColumn::make('Route4')
                    ->searchable(),
                TextColumn::make('Slug4')
                    ->searchable(),
                IconColumn::make('Is_active')
                    ->boolean(),
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
