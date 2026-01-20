<?php

namespace App\Filament\Resources\FormLists\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class FormListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                Select::make('CategoryID')
                    ->required()
                    ->relationship('category','Title'),
                FileUpload::make('File')
                    ->required()
                    ->disk('public_direct')
                    ->directory('assets/files')
                    ->visibility('public'),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
