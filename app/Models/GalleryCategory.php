<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $table='gallery_categories';
    protected $fillable=[
        'Title',
        'IsActive',
    ];

    public function galleries()
    {
        return $this->hasMany(GallerySetup::class, 'Category_id');
    }
}
