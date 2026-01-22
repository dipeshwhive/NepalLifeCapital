<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    protected $table = "years";
    protected $fillable = [
        'year',
        'is_active',
    ];

    public function newsletters(){
        return $this->hasMany(Newsletter::class, 'year_id');
    }
}
