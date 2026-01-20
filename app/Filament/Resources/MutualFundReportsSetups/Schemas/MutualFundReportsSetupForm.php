<?php

namespace App\Filament\Resources\MutualFundReportsSetups\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MutualFundReportsSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('DocumentName')
                    ->required(),
                DatePicker::make('CreatedDate')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
