<?php

namespace App\Filament\Resources\Years\RelationManagers;

use App\Filament\Resources\Newsletters\NewsletterResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class NewslettersRelationManager extends RelationManager
{
    protected static string $relationship = 'newsletters';

    protected static ?string $relatedResource = NewsletterResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
