<?php

namespace App\Filament\Resources\NavReports\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;

class NavReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('TransactionAmount')
                    ->required(),
                TextInput::make('Commission')
                    ->required(),
                Select::make('CategoryID')
                    ->required()
                    ->relationship('category','Title'),
                Toggle::make('IsActive')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
