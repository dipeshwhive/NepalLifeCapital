<?php

namespace App\Filament\Resources\SocialSitesManagement;

use App\Filament\Resources\SocialSitesManagement\Pages\CreateSocialSitesManagement;
use App\Filament\Resources\SocialSitesManagement\Pages\EditSocialSitesManagement;
use App\Filament\Resources\SocialSitesManagement\Pages\ListSocialSitesManagement;
use App\Filament\Resources\SocialSitesManagement\Schemas\SocialSitesManagementForm;
use App\Filament\Resources\SocialSitesManagement\Tables\SocialSitesManagementTable;
use App\Models\SocialSitesManagement;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SocialSitesManagementResource extends Resource
{
    protected static ?string $model = SocialSitesManagement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInbox;

    protected static ?string $modelLabel = 'Social Sites Management';

    protected static ?string $navigationLabel = 'Social Site Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Master Setup';


    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return SocialSitesManagementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SocialSitesManagementTable::configure($table);
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
            'index' => ListSocialSitesManagement::route('/'),
            'create' => CreateSocialSitesManagement::route('/create'),
            'edit' => EditSocialSitesManagement::route('/{record}/edit'),
        ];
    }
}
