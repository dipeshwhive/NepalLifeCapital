<?php

namespace App\Filament\Resources\MessageCPS;

use App\Filament\Resources\MessageCPS\Pages\CreateMessageCP;
use App\Filament\Resources\MessageCPS\Pages\EditMessageCP;
use App\Filament\Resources\MessageCPS\Pages\ListMessageCPS;
use App\Filament\Resources\MessageCPS\Schemas\MessageCPForm;
use App\Filament\Resources\MessageCPS\Tables\MessageCPSTable;
use App\Models\MessageCP;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MessageCPResource extends Resource
{
    protected static ?string $model = MessageCP::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Bookmark;

    public static ?string $modelLabel = 'Message From Chairperson';

    public static ?string $navigationLabel = 'Message From Chairperson';

    protected static string|UnitEnum|null $navigationGroup = 'About Page';
    
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return MessageCPForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MessageCPSTable::configure($table);
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
            'index' => ListMessageCPS::route('/'),
            'create' => CreateMessageCP::route('/create'),
            'edit' => EditMessageCP::route('/{record}/edit'),
        ];
    }
}
