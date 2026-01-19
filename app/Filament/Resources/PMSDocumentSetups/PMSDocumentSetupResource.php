<?php

namespace App\Filament\Resources\PMSDocumentSetups;

use App\Filament\Resources\PMSDocumentSetups\Pages\CreatePMSDocumentSetup;
use App\Filament\Resources\PMSDocumentSetups\Pages\EditPMSDocumentSetup;
use App\Filament\Resources\PMSDocumentSetups\Pages\ListPMSDocumentSetups;
use App\Filament\Resources\PMSDocumentSetups\Schemas\PMSDocumentSetupForm;
use App\Filament\Resources\PMSDocumentSetups\Tables\PMSDocumentSetupsTable;
use App\Models\PMSDocumentSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PMSDocumentSetupResource extends Resource
{
    protected static ?string $model = PMSDocumentSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Document;

    protected static ?string $modelLabel = 'PMS Document Setup';

    protected static ?string $navigationLabel = 'PMS Document Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Services & Products';


    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return PMSDocumentSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PMSDocumentSetupsTable::configure($table);
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
            'index' => ListPMSDocumentSetups::route('/'),
            'create' => CreatePMSDocumentSetup::route('/create'),
            'edit' => EditPMSDocumentSetup::route('/{record}/edit'),
        ];
    }
}
