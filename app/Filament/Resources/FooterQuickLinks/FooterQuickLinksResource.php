<?php

namespace App\Filament\Resources\FooterQuickLinks;

use App\Filament\Resources\FooterQuickLinks\Pages\CreateFooterQuickLinks;
use App\Filament\Resources\FooterQuickLinks\Pages\EditFooterQuickLinks;
use App\Filament\Resources\FooterQuickLinks\Pages\ListFooterQuickLinks;
use App\Filament\Resources\FooterQuickLinks\Schemas\FooterQuickLinksForm;
use App\Filament\Resources\FooterQuickLinks\Tables\FooterQuickLinksTable;
use App\Models\FooterQuickLinks;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FooterQuickLinksResource extends Resource
{
    protected static ?string $model = FooterQuickLinks::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedComputerDesktop;

    protected static ?string $modelLabel = 'Footer Quick Links Setup';

    protected static ?string $navigationLabel = 'Footer Quick Links';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 10;

    public static function form(Schema $schema): Schema
    {
        return FooterQuickLinksForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FooterQuickLinksTable::configure($table);
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
            'index' => ListFooterQuickLinks::route('/'),
            'create' => CreateFooterQuickLinks::route('/create'),
            'edit' => EditFooterQuickLinks::route('/{record}/edit'),
        ];
    }
}
