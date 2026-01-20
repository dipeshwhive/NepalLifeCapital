<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormCategory extends Model
{
    protected $table = "form_categories";
    protected $fillable = [
        'Title',
        'IsActive',
    ];

    public function list(){
        return $this->hasMany(FormList::class,'CategoryID');
    }
}
