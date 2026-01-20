<?php

namespace App\Filament\Resources\FormLists;

use App\Filament\Resources\FormLists\Pages\CreateFormList;
use App\Filament\Resources\FormLists\Pages\EditFormList;
use App\Filament\Resources\FormLists\Pages\ListFormLists;
use App\Filament\Resources\FormLists\Schemas\FormListForm;
use App\Filament\Resources\FormLists\Tables\FormListsTable;
use App\Models\FormList;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FormListResource extends Resource
{
    protected static ?string $model = FormList::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQueueList;

    protected static ?string $modelLabel = 'Form List';

    protected static ?string $navigationLabel = 'Form List';

    protected static string|UnitEnum|null $navigationGroup = 'Form Management';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return FormListForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FormListsTable::configure($table);
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
            'index' => ListFormLists::route('/'),
            'create' => CreateFormList::route('/create'),
            'edit' => EditFormList::route('/{record}/edit'),
        ];
    }
}
