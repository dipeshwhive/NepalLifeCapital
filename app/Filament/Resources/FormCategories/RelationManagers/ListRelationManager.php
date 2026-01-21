<?php

namespace App\Filament\Resources\FormCategories\RelationManagers;

use App\Filament\Resources\FormLists\FormListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class ListRelationManager extends RelationManager
{
    protected static string $relationship = 'list';

    protected static ?string $relatedResource = FormListResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
