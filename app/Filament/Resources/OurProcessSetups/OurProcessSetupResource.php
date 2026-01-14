<?php

namespace App\Filament\Resources\OurProcessSetups;

use App\Filament\Resources\OurProcessSetups\Pages\CreateOurProcessSetup;
use App\Filament\Resources\OurProcessSetups\Pages\EditOurProcessSetup;
use App\Filament\Resources\OurProcessSetups\Pages\ListOurProcessSetups;
use App\Filament\Resources\OurProcessSetups\Schemas\OurProcessSetupForm;
use App\Filament\Resources\OurProcessSetups\Tables\OurProcessSetupsTable;
use App\Models\OurProcessSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurProcessSetupResource extends Resource
{
    protected static ?string $model = OurProcessSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Briefcase;

    protected static ?string $modelLabel = 'Our Process Setup';

    protected static ?string $navigationLabel = 'Our Process Setup';

    protected static string|UnitEnum|null $navigationGroup = 'About Page';


    protected static ?int $navigationSort = 8;
    public static function form(Schema $schema): Schema
    {
        return OurProcessSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurProcessSetupsTable::configure($table);
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
            'index' => ListOurProcessSetups::route('/'),
            'create' => CreateOurProcessSetup::route('/create'),
            'edit' => EditOurProcessSetup::route('/{record}/edit'),
        ];
    }
}
