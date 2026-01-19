<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQSetup extends Model
{
    protected $table = "f_a_q_setups";
    protected $fillable = [
        'CategoryId',
        'Questions',
        'Answers',
        'IsActive',
    ];

    public function category(){
        return $this->belongsTo(FAQCategorySetup::class,'CategoryId');
    }

}
