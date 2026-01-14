<?php

namespace App\Filament\Resources\NotificationSetups;

use App\Filament\Resources\NotificationSetups\Pages\CreateNotificationSetup;
use App\Filament\Resources\NotificationSetups\Pages\EditNotificationSetup;
use App\Filament\Resources\NotificationSetups\Pages\ListNotificationSetups;
use App\Filament\Resources\NotificationSetups\Schemas\NotificationSetupForm;
use App\Filament\Resources\NotificationSetups\Tables\NotificationSetupsTable;
use App\Models\NotificationSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NotificationSetupResource extends Resource
{
    protected static ?string $model = NotificationSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocument;

    protected static ?string $modelLabel = 'Notification Setup';

    protected static ?string $navigationLabel = 'Notification Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';


    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return NotificationSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NotificationSetupsTable::configure($table);
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
            'index' => ListNotificationSetups::route('/'),
            'create' => CreateNotificationSetup::route('/create'),
            'edit' => EditNotificationSetup::route('/{record}/edit'),
        ];
    }
}
