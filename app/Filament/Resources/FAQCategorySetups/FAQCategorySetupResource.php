<?php

namespace App\Filament\Resources\FAQCategorySetups;

use UnitEnum;
use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\FAQCategorySetup;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\FAQCategorySetups\Pages\EditFAQCategorySetup;
use App\Filament\Resources\FAQCategorySetups\Pages\ListFAQCategorySetups;
use App\Filament\Resources\FAQCategorySetups\Pages\CreateFAQCategorySetup;
use App\Filament\Resources\FAQCategorySetups\Schemas\FAQCategorySetupForm;
use App\Filament\Resources\FAQCategorySetups\Tables\FAQCategorySetupsTable;
use App\Filament\Resources\FAQCategorySetups\RelationManagers\FaqsRelationManager;

class FAQCategorySetupResource extends Resource
{
    protected static ?string $model = FAQCategorySetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::QuestionMarkCircle;

    protected static ?string $modelLabel = 'FAQ Category Setup';

    protected static ?string $navigationLabel = 'FAQ Category Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return FAQCategorySetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FAQCategorySetupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            FaqsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFAQCategorySetups::route('/'),
            'create' => CreateFAQCategorySetup::route('/create'),
            'edit' => EditFAQCategorySetup::route('/{record}/edit'),
        ];
    }
}
