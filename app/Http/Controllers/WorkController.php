<?php

namespace App\Http\Controllers;

class WorkController
{
    public function showWork()
    {
        $title  = "Mijn werk";
        $active = str_replace(' ', '', strtolower($title));

        return view('work', ['title' => $title, 'active' => $active]);
    }
}
