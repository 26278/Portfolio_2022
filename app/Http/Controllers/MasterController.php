<?php

namespace App\Http\Controllers;

class MasterController
{

    public static function getLowCompressedString($title)
    {
        return str_replace(' ', '', strtolower($title));
    }

    public function showHome()
    {
        $title  = "Home";
        $active = self::getLowCompressedString($title);

        return view('home', ['title' => $title, 'active' => $active]);
    }

    public function showOverMij()
    {
        $title  = "Over mij";
        $active = self::getLowCompressedString($title);

        return view('over-mij', ['title' => $title, 'active' => $active]);
    }
}
