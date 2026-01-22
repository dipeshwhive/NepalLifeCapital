<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletter';
    protected $fillable = [
        'title',
        'file',
        'month',
        'year_id',
        'show_in_home',
        'is_active',
    ];

    public function years(){
        return $this->belongsTo(Years::class, 'year_id');
    }
}
