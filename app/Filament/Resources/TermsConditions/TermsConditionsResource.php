<?php

namespace App\Filament\Resources\TermsConditions;

use App\Filament\Resources\TermsConditions\Pages\CreateTermsConditions;
use App\Filament\Resources\TermsConditions\Pages\EditTermsConditions;
use App\Filament\Resources\TermsConditions\Pages\ListTermsConditions;
use App\Filament\Resources\TermsConditions\Schemas\TermsConditionsForm;
use App\Filament\Resources\TermsConditions\Tables\TermsConditionsTable;
use App\Models\TermsConditions;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TermsConditionsResource extends Resource
{
    protected static ?string $model = TermsConditions::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShieldCheck;

    protected static ?string $modelLabel = 'Terms & Conditions';

    protected static ?string $navigationLabel = 'Terms & Conditions';

    protected static string|UnitEnum|null $navigationGroup = 'About Page';


    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return TermsConditionsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TermsConditionsTable::configure($table);
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
            'index' => ListTermsConditions::route('/'),
            'create' => CreateTermsConditions::route('/create'),
            'edit' => EditTermsConditions::route('/{record}/edit'),
        ];
    }
}
