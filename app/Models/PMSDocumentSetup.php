<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PMSDocumentSetup extends Model
{
    protected $table = "p_m_s_document_setups";
    protected $fillable = [
        "Title",
        "IsActive",
    ];
}
