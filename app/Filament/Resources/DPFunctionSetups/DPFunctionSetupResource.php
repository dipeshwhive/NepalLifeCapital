<?php

namespace App\Filament\Resources\DPFunctionSetups;

use App\Filament\Resources\DPFunctionSetups\Pages\CreateDPFunctionSetup;
use App\Filament\Resources\DPFunctionSetups\Pages\EditDPFunctionSetup;
use App\Filament\Resources\DPFunctionSetups\Pages\ListDPFunctionSetups;
use App\Filament\Resources\DPFunctionSetups\Schemas\DPFunctionSetupForm;
use App\Filament\Resources\DPFunctionSetups\Tables\DPFunctionSetupsTable;
use App\Models\DPFunctionSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DPFunctionSetupResource extends Resource
{
    protected static ?string $model = DPFunctionSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::FolderOpen;

    protected static ?string $modelLabel = 'DP Functions Setup';

    protected static ?string $navigationLabel = 'DP Functions Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Services & Products';


    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return DPFunctionSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DPFunctionSetupsTable::configure($table);
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
            'index' => ListDPFunctionSetups::route('/'),
            'create' => CreateDPFunctionSetup::route('/create'),
            'edit' => EditDPFunctionSetup::route('/{record}/edit'),
        ];
    }
}
