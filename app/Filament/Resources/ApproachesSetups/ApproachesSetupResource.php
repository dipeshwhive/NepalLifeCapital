<?php

namespace App\Filament\Resources\ApproachesSetups;

use App\Filament\Resources\ApproachesSetups\Pages\CreateApproachesSetup;
use App\Filament\Resources\ApproachesSetups\Pages\EditApproachesSetup;
use App\Filament\Resources\ApproachesSetups\Pages\ListApproachesSetups;
use App\Filament\Resources\ApproachesSetups\Schemas\ApproachesSetupForm;
use App\Filament\Resources\ApproachesSetups\Tables\ApproachesSetupsTable;
use App\Models\ApproachesSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ApproachesSetupResource extends Resource
{
    protected static ?string $model = ApproachesSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Squares2x2;

    protected static ?string $modelLabel = 'Approaches Setup';

    protected static ?string $navigationLabel = 'Approaches Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return ApproachesSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ApproachesSetupsTable::configure($table);
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
            'index' => ListApproachesSetups::route('/'),
            'create' => CreateApproachesSetup::route('/create'),
            'edit' => EditApproachesSetup::route('/{record}/edit'),
        ];
    }
}
