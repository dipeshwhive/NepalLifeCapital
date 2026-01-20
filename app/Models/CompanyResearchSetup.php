<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyResearchSetup extends Model
{
    protected $table = 'company_research_setups';

    protected $fillable = [
        'Title',
        'File',
        'IsActive',
    ];
}
