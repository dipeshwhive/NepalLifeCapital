<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DPFunctionSetup extends Model
{
    protected $table = "d_p_function_setups";
    protected $fillable = [
        "Title",
        "IsActive",
    ];
}
