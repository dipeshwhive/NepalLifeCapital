<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormList extends Model
{
    protected $table="form_lists";
    protected $fillable=[
        'Title',
        'CategoryID',
        'File',
        'IsActive',
    ];

    public function category(){
        return $this->belongsTo(FormCategory::class,'CategoryID');
    }
}
