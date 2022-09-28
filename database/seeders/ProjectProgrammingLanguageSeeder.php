<?php

namespace Database\Seeders;

use App\Models\ProjectProgrammingLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectProgrammingLanguage::create([
            'project_id'              => '1',
            'programming_language_id' => '6',
        ]);
    }
}
