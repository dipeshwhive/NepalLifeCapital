<?php

namespace App\Filament\Resources\Years;

use UnitEnum;
use BackedEnum;
use App\Models\Years;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\Years\Pages\EditYears;
use App\Filament\Resources\Years\Pages\ListYears;
use App\Filament\Resources\Years\Pages\CreateYears;
use App\Filament\Resources\Years\Schemas\YearsForm;
use App\Filament\Resources\Years\Tables\YearsTable;
use App\Filament\Resources\Years\RelationManagers\NewslettersRelationManager;

class YearsResource extends Resource
{
    protected static ?string $model = Years::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Calendar;

    protected static ?string $modelLabel = 'Year Setup';

    protected static ?string $navigationLabel = 'Year Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return YearsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return YearsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            NewslettersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListYears::route('/'),
            'create' => CreateYears::route('/create'),
            'edit' => EditYears::route('/{record}/edit'),
        ];
    }
}
