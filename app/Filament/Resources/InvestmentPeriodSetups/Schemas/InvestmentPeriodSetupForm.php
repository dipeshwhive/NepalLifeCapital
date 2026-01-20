<?php

namespace App\Filament\Resources\InvestmentPeriodSetups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class InvestmentPeriodSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                TextInput::make('NumericValue')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
