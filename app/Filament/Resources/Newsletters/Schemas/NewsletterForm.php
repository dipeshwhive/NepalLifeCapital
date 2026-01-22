<?php

namespace App\Filament\Resources\Newsletters\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class NewsletterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('file')
                    ->required()
                    ->disk('public_direct')
                    ->directory('assets/pdf')
                    ->visibility('public'),
                Select::make('month')
                    ->options([
            'January' => 'January',
            'February' => 'February',
            'March' => 'March',
            'April' => 'April',
            'May' => 'May',
            'June' => 'June',
            'July' => 'July',
            'August' => 'August',
            'September' => 'September',
            'October' => 'October',
            'November' => 'November',
            'December' => 'December',
        ])
                    ->default(null),
                Select::make('year_id')
                    ->required()
                    ->relationship('years','year'),
                Toggle::make('show_in_home')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
