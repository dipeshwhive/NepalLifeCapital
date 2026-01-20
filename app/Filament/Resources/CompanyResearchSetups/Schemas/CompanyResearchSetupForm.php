<?php

namespace App\Filament\Resources\CompanyResearchSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class CompanyResearchSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                FileUpload::make('File')
                    ->disk('public_direct')
                    ->directory('assets/files')
                    ->visibility('public')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
