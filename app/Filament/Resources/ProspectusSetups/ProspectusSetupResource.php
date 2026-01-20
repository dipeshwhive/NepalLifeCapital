<?php

namespace App\Filament\Resources\ProspectusSetups;

use App\Filament\Resources\ProspectusSetups\Pages\CreateProspectusSetup;
use App\Filament\Resources\ProspectusSetups\Pages\EditProspectusSetup;
use App\Filament\Resources\ProspectusSetups\Pages\ListProspectusSetups;
use App\Filament\Resources\ProspectusSetups\Schemas\ProspectusSetupForm;
use App\Filament\Resources\ProspectusSetups\Tables\ProspectusSetupsTable;
use App\Models\ProspectusSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProspectusSetupResource extends Resource
{
    protected static ?string $model = ProspectusSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedEnvelope;

    protected static ?string $modelLabel = 'Prospectus Setup';

    protected static ?string $navigationLabel = 'Prospectus Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Publication';


    protected static ?int $navigationSort = 8;

    public static function form(Schema $schema): Schema
    {
        return ProspectusSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProspectusSetupsTable::configure($table);
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
            'index' => ListProspectusSetups::route('/'),
            'create' => CreateProspectusSetup::route('/create'),
            'edit' => EditProspectusSetup::route('/{record}/edit'),
        ];
    }
}
