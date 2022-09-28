<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    protected $fillable = [
        'language',
    ];

    public function projects() {
        return $this->belongsToMany(Project::class, 'projects_programming_language');
    }
}
