<?php

namespace App\Filament\Resources\TestimonialManagement;

use App\Filament\Resources\TestimonialManagement\Pages\CreateTestimonialManagement;
use App\Filament\Resources\TestimonialManagement\Pages\EditTestimonialManagement;
use App\Filament\Resources\TestimonialManagement\Pages\ListTestimonialManagement;
use App\Filament\Resources\TestimonialManagement\Schemas\TestimonialManagementForm;
use App\Filament\Resources\TestimonialManagement\Tables\TestimonialManagementTable;
use App\Models\TestimonialManagement;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TestimonialManagementResource extends Resource
{
    protected static ?string $model = TestimonialManagement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Pencil;

    protected static ?string $modelLabel = 'Testimonial Management';

    protected static ?string $navigationLabel = 'Testimonial Management';

    protected static string|UnitEnum|null $navigationGroup = 'Miscellaneous';


    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return TestimonialManagementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestimonialManagementTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTestimonialManagement::route('/'),
            'create' => CreateTestimonialManagement::route('/create'),
            'edit' => EditTestimonialManagement::route('/{record}/edit'),
        ];
    }
}
