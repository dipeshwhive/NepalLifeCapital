<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurProcessSetup extends Model
{
    protected $table = 'our_process_setups';

    protected $fillable = [
        'Title','IsActive',
    ];
}
