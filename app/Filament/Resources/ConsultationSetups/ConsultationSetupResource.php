<?php

namespace App\Filament\Resources\ConsultationSetups;

use App\Filament\Resources\ConsultationSetups\Pages\CreateConsultationSetup;
use App\Filament\Resources\ConsultationSetups\Pages\EditConsultationSetup;
use App\Filament\Resources\ConsultationSetups\Pages\ListConsultationSetups;
use App\Filament\Resources\ConsultationSetups\Schemas\ConsultationSetupForm;
use App\Filament\Resources\ConsultationSetups\Tables\ConsultationSetupsTable;
use App\Models\ConsultationSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConsultationSetupResource extends Resource
{
    protected static ?string $model = ConsultationSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Phone;

    protected static ?string $modelLabel = 'Consultation Setup';

    protected static ?string $navigationLabel = 'Consultation Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return ConsultationSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConsultationSetupsTable::configure($table);
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
            'index' => ListConsultationSetups::route('/'),
            'create' => CreateConsultationSetup::route('/create'),
            'edit' => EditConsultationSetup::route('/{record}/edit'),
        ];
    }
}
