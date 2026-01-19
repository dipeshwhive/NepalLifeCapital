<?php

namespace App\Filament\Resources\PortfolioProductsSetups\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PortfolioProductsSetupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Title')
                    ->required(),
                RichEditor::make('Description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('FeaturedImage')
                    ->image()
                    ->disk('public_direct')
                    ->directory('assets/images')
                    ->visibility('public')
                    ->nullable(),
                TextInput::make('TargetMarket')
                    ->default(null),
                TextInput::make('Category')
                    ->default(null),
                RichEditor::make('Features')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('ContractPeriod')
                    ->default(null),
                TextInput::make('LockPeriod')
                ->label('Lock In Period')
                    ->default(null),
                TextInput::make('AUMFees')
                    ->label('AUM Fees')
                    ->default(null),
                TextInput::make('HurdleRate')
                    ->default(null),
                TextInput::make('ExpectedReturn')
                    ->default(null),
                TextInput::make('MinimumPortfolio')
                    ->default(null),
                TextInput::make('MinInvestment')
                    ->default(null),
                TextInput::make('PerformanceFee')
                    ->default(null),
                TextInput::make('ExitLoad')
                    ->default(null),
                TextInput::make('Objectives')
                    ->default(null),
                Toggle::make('ShowNav')
                    ->required(),
                Toggle::make('ShowHome')
                    ->required(),
                Toggle::make('IsActive')
                    ->required(),
            ]);
    }
}
