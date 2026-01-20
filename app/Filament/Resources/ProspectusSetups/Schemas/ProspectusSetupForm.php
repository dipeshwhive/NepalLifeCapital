<?php

namespace App\Filament\Resources\ProspectusSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class ProspectusSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                FileUpload::make('PdfFile')
                    ->required()
                    ->disk('public_direct')
                    ->directory('assets/files')
                    ->visibility('public'),
                DateTimePicker::make('CreatedAt')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
