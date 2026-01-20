<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProspectusSetup extends Model
{
    protected $table = "prospectus_setups";
    protected $fillable = [
        'Title',
        'PdfFile',
        'CreatedAt',
        'IsActive',
    ];
}
