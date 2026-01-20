<?php

namespace App\Filament\Resources\MutualFundSchemeManagement\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;

class MutualFundSchemeManagementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                TextInput::make('MaturityPeriod')
                    ->required(),
                TextInput::make('FundSize')
                    ->required(),
                Select::make('SchemeType')
                    ->required()
                    ->options([
                        'Chose-end-scheme'=> 'Chose-end-scheme',
                        'Open-end-scheme'=> 'Open-end-scheme',
                    ]),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
