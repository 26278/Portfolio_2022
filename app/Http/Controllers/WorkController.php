<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use App\Models\Project;

class WorkController
{
    public function showWork()
    {
        $title  = "Mijn werk";
        $active = str_replace(' ', '', strtolower($title));

        $ooWorkExperiences = WorkExperience::all();
        $ooProjects        = Project::all();

        return view('work', [
            'title'             => $title,
            'active'            => $active,
            'ooWorkExperiences' => $ooWorkExperiences,
            'ooProjects'        => $ooProjects,
        ]);
    }
}
