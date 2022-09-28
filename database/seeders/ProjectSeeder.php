<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title'     => 'Journey of the DevKing',
            'subtitle'  => 'Game in Java met JavaFXGL library',
            'image'     => 'devking.jpg',
            'type'      => 'JavaFX game',
            'main_text' => 'Test',
            'github'    => 'https://github.com/26278/Journey-Of-The-Dev-King',
        ]);

        Project::create([
            'title'     => 'MaRequest',
            'subtitle'  => 'Laravel website voor charity-event, gebouwd in 1 week',
            'image'     => 'ma-request.jpg',
            'type'      => 'Laravel website',
            'main_text' => 'Test',
            'github'    => 'https://github.com/26278/ma-request',
        ]);

        Project::create([
            'title'     => 'JustPoké',
            'subtitle'  => 'Pokebowl order app gebouwd met Dart en Flutter',
            'image'     => 'pokebowl.jpg',
            'type'      => 'Flutter app',
            'main_text' => 'Test',
            'github'    => 'https://github.com/RobbeLee/JustPoke',
        ]);

        Project::create([
            'title'     => 'SuperOrange graphic design',
            'subtitle'  => 'Catalogs, magazine prints en social media posts',
            'image'     => 'superorange.jpg',
            'type'      => 'Graphic Design',
            'main_text' => 'Test',
            'github'    => '',
        ]);
    }
}
