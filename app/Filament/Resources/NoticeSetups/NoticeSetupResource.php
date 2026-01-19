<?php

namespace App\Filament\Resources\NoticeSetups;

use App\Filament\Resources\NoticeSetups\Pages\CreateNoticeSetup;
use App\Filament\Resources\NoticeSetups\Pages\EditNoticeSetup;
use App\Filament\Resources\NoticeSetups\Pages\ListNoticeSetups;
use App\Filament\Resources\NoticeSetups\Schemas\NoticeSetupForm;
use App\Filament\Resources\NoticeSetups\Tables\NoticeSetupsTable;
use App\Models\NoticeSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NoticeSetupResource extends Resource
{
    protected static ?string $model = NoticeSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBell;

    protected static ?string $modelLabel = 'Notice Setup';

    protected static ?string $navigationLabel = 'Notice Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 1;


    public static function form(Schema $schema): Schema
    {
        return NoticeSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NoticeSetupsTable::configure($table);
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
            'index' => ListNoticeSetups::route('/'),
            'create' => CreateNoticeSetup::route('/create'),
            'edit' => EditNoticeSetup::route('/{record}/edit'),
        ];
    }
}
