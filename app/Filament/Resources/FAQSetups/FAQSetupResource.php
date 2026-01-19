<?php

namespace App\Filament\Resources\FAQSetups;

use App\Filament\Resources\FAQSetups\Pages\CreateFAQSetup;
use App\Filament\Resources\FAQSetups\Pages\EditFAQSetup;
use App\Filament\Resources\FAQSetups\Pages\ListFAQSetups;
use App\Filament\Resources\FAQSetups\Schemas\FAQSetupForm;
use App\Filament\Resources\FAQSetups\Tables\FAQSetupsTable;
use App\Models\FAQSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FAQSetupResource extends Resource
{
    protected static ?string $model = FAQSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::PuzzlePiece;

    protected static ?string $modelLabel = 'FAQ Setup';

    protected static ?string $navigationLabel = 'FAQ Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return FAQSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FAQSetupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFAQSetups::route('/'),
            'create' => CreateFAQSetup::route('/create'),
            'edit' => EditFAQSetup::route('/{record}/edit'),
        ];
    }
}
