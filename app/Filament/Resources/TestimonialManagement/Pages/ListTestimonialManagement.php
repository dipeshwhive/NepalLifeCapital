<?php

namespace App\Filament\Resources\TestimonialManagement\Pages;

use App\Filament\Resources\TestimonialManagement\TestimonialManagementResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialManagement extends ListRecords
{
    protected static string $resource = TestimonialManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
