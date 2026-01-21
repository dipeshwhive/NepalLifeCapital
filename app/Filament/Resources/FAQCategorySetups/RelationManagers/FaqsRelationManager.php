<?php

namespace App\Filament\Resources\FAQCategorySetups\RelationManagers;

use App\Filament\Resources\FAQSetups\FAQSetupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class FaqsRelationManager extends RelationManager
{
    protected static string $relationship = 'faqs';

    protected static ?string $relatedResource = FAQSetupResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
