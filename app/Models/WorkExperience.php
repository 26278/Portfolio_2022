<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'company',
        'image',
        'title',
        'employee',
        'header_text',
        'main_text'
    ];
}
