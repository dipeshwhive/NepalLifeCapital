<?php

namespace App\Filament\Resources\BoardOfDirectors;

use App\Filament\Resources\BoardOfDirectors\Pages\CreateBoardOfDirector;
use App\Filament\Resources\BoardOfDirectors\Pages\EditBoardOfDirector;
use App\Filament\Resources\BoardOfDirectors\Pages\ListBoardOfDirectors;
use App\Filament\Resources\BoardOfDirectors\Schemas\BoardOfDirectorForm;
use App\Filament\Resources\BoardOfDirectors\Tables\BoardOfDirectorsTable;
use App\Models\BoardOfDirector;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BoardOfDirectorResource extends Resource
{
    protected static ?string $model = BoardOfDirector::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Star;

    protected static ?string $modelLabel = 'Board of Director Setup';

    protected static ?string $navigationLabel = 'Board of Director Setup';

    protected static string|UnitEnum|null $navigationGroup = 'About Page';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return BoardOfDirectorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BoardOfDirectorsTable::configure($table);
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
            'index' => ListBoardOfDirectors::route('/'),
            'create' => CreateBoardOfDirector::route('/create'),
            'edit' => EditBoardOfDirector::route('/{record}/edit'),
        ];
    }
}
