<?php

namespace App\Filament\Resources\HomePageSetups\Pages;

use App\Filament\Resources\HomePageSetups\HomePageSetupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomePageSetup extends CreateRecord
{
    protected static string $resource = HomePageSetupResource::class;
}
