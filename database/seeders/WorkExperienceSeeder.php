<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkExperience::create([
            'company'     => 'GumGum',
            'image'       => 'gumgum.jpg',
            'title'       => 'Creative Front-end Developer',
            'employee'    => true,
            'header_text' => 'GumGum is een Contextual Intelligence bedrijf met een van de grootste marktplaatsen voor rich media en video-advertenties.',
            'main_text'   => '',
        ]);

        WorkExperience::create([
            'company'     => 'Activate your Business',
            'image'       => 'activateyourbusiness.jpg',
            'title'       => 'Back-end stagiair',
            'employee'    => true,
            'header_text' => 'Activate your Business is een jonge onderneming waar doelgerichte websites, apps en software op maat worden gebouwd met oog voor gebruiksvriendelijkheid.',
            'main_text'   => '',
        ]);

        WorkExperience::create([
            'company'     => 'Wood Be Hero Skateshop',
            'image'       => 'woodbehero.jpg',
            'title'       => 'Graphic designer & IT guy',
            'employee'    => true,
            'header_text' => 'Wood Be Hero Skateshop in Oegstgeest is de lokale skateboard winkel waar mijn sport uit de hand is gelopen tot een levensstijl. Inmiddels werk ik er twee jaar.',
            'main_text'   => '',
        ]);

        WorkExperience::create([
            'company'     => 'Alfons Bouw.nl',
            'image'       => 'alfonsbouw.jpg',
            'title'       => 'Web developer',
            'employee'    => false,
            'header_text' => 'Alfons Bouw is een aannemer voor verschillende producten zoals uitbouwen, dakkapellen, kozijnen, enzovoort. De website kon een nieuwe uitstraling gebruiken en daar heb ik bij geholpen.',
            'main_text'   => '',
        ]);
    }
}
