<?php

namespace App\Filament\Resources\TestimonialManagement\Pages;

use App\Filament\Resources\TestimonialManagement\TestimonialManagementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialManagement extends EditRecord
{
    protected static string $resource = TestimonialManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
