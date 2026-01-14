<?php

namespace App\Filament\Resources\PrivacyPolicies\Pages;

use App\Filament\Resources\PrivacyPolicies\PrivacyPolicyResource;
use App\Models\PrivacyPolicy;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrivacyPolicies extends ListRecords
{
    protected static string $resource = PrivacyPolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
     public function mount(): void
    {
        $policy = PrivacyPolicy::first();

        redirect(
            PrivacyPolicyResource::getUrl('edit', [
                'record' => $policy,
            ])
        );
    }
}
