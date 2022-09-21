<?php

namespace App\Http\Controllers;

class MasterController
{
    public function showHome()
    {
        $title  = "Home";
        $active = str_replace(' ', '', strtolower($title));

        return view('home', ['title' => $title, 'active' => $active]);
    }
}
