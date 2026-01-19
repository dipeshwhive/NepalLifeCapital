<?php

namespace App\Filament\Resources\FeaturesSetups;

use App\Filament\Resources\FeaturesSetups\Pages\CreateFeaturesSetup;
use App\Filament\Resources\FeaturesSetups\Pages\EditFeaturesSetup;
use App\Filament\Resources\FeaturesSetups\Pages\ListFeaturesSetups;
use App\Filament\Resources\FeaturesSetups\Schemas\FeaturesSetupForm;
use App\Filament\Resources\FeaturesSetups\Tables\FeaturesSetupsTable;
use App\Models\FeaturesSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FeaturesSetupResource extends Resource
{
    protected static ?string $model = FeaturesSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Clipboard;

    protected static ?string $modelLabel = 'Features Setup';

    protected static ?string $navigationLabel = 'Features Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return FeaturesSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FeaturesSetupsTable::configure($table);
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
            'index' => ListFeaturesSetups::route('/'),
            'create' => CreateFeaturesSetup::route('/create'),
            'edit' => EditFeaturesSetup::route('/{record}/edit'),
        ];
    }
}
