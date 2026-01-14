<?php

namespace App\Filament\Resources\SliderSetups;

use App\Filament\Resources\SliderSetups\Pages\CreateSliderSetup;
use App\Filament\Resources\SliderSetups\Pages\EditSliderSetup;
use App\Filament\Resources\SliderSetups\Pages\ListSliderSetups;
use App\Filament\Resources\SliderSetups\Schemas\SliderSetupForm;
use App\Filament\Resources\SliderSetups\Tables\SliderSetupsTable;
use App\Models\SliderSetup;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SliderSetupResource extends Resource
{
    protected static ?string $model = SliderSetup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBell;

    protected static ?string $modelLabel = 'Slider Setup';

    protected static ?string $navigationLabel = 'Slider Setup';

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';


    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return SliderSetupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SliderSetupsTable::configure($table);
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
            'index' => ListSliderSetups::route('/'),
            'create' => CreateSliderSetup::route('/create'),
            'edit' => EditSliderSetup::route('/{record}/edit'),
        ];
    }
}
