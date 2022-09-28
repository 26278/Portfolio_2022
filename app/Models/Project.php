<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'type',
        'main_text',
        'github',
    ];

    public function programmingLanguages()
    {
        return $this->belongsToMany(ProgrammingLanguage::class, 'project_programming_language');
    }
}
