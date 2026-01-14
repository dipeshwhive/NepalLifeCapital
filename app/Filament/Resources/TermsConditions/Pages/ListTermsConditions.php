<?php

namespace App\Filament\Resources\TermsConditions\Pages;

use App\Filament\Resources\TermsConditions\TermsConditionsResource;
use App\Models\TermsConditions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTermsConditions extends ListRecords
{
    protected static string $resource = TermsConditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
    public function mount(): void
    {
        $terms = TermsConditions::first();

        redirect(
            TermsConditionsResource::getUrl('edit', [
                'record' => $terms,
            ])
        );
    }
}
