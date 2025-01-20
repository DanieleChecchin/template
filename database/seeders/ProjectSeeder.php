<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typeIds = Type::all()->pluck('id'); //prendo tutti i types

        $projectNames=[
            'boolflix',
            'boolando',
            'boolzap',
            'db_university',
            'hello_world'
        ];
        foreach ($projectNames as $name) {
            $newProject = new Project();
            $newProject->type_id = $faker->randomElement($typeIds);
            $newProject->name = $name;
            $newProject->save();

        }
    }
}
