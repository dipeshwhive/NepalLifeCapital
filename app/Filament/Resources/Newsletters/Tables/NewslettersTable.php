<?php

namespace App\Filament\Resources\Newsletters\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class NewslettersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('file')
                    ->searchable(),
                TextColumn::make('month')
                    ->badge(),
                TextColumn::make('year_id')
                    ->numeric()
                    ->sortable(),
                ToggleColumn::make('show_in_home')
                    ->onColor('success')
                    ->offColor('danger'),
                ToggleColumn::make('is_active')
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
