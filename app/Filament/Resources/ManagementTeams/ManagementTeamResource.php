<?php

namespace App\Filament\Resources\ManagementTeams;

use App\Filament\Resources\ManagementTeams\Pages\CreateManagementTeam;
use App\Filament\Resources\ManagementTeams\Pages\EditManagementTeam;
use App\Filament\Resources\ManagementTeams\Pages\ListManagementTeams;
use App\Filament\Resources\ManagementTeams\Schemas\ManagementTeamForm;
use App\Filament\Resources\ManagementTeams\Tables\ManagementTeamsTable;
use App\Models\ManagementTeam;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ManagementTeamResource extends Resource
{
    protected static ?string $model = ManagementTeam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::AcademicCap;

    public static ?string $modelLabel = 'Management Team';

    public static ?string $navigationLabel = 'Management Team';

    protected static string|UnitEnum|null $navigationGroup = 'About Page';
    
    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return ManagementTeamForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ManagementTeamsTable::configure($table);
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
            'index' => ListManagementTeams::route('/'),
            'create' => CreateManagementTeam::route('/create'),
            'edit' => EditManagementTeam::route('/{record}/edit'),
        ];
    }
}
