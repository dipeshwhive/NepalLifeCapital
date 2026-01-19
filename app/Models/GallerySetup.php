<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GallerySetup extends Model
{
    protected $table = "gallery_setups";
    protected $fillable = [
        'FeaturedImage',
        'Category_id',
        'IsActive',
    ];

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'Category_id');
    }
}
