<?php

namespace Database\Seeders;

use App\Models\Technology;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $projects = Project::all(); //Prendo tutti i progetti
        $technologies = Technology::all()->pluck('id'); //Prendo tutti gli id delle tecnologie

        foreach ($projects as $project) {
            $project->technologies()->sync($faker->randomElements($technologies, rand(1, 5)));
        }
    }
}
