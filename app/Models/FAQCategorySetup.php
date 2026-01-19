<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQCategorySetup extends Model
{
    protected $table = "f_a_q_category_setups";
    protected $fillable = [
        'Title',
        'IsActive',
    ];

    public function faqs()
    {
        return $this->hasMany(FAQSetup::class, 'CategoryId', 'id');
    }
}
