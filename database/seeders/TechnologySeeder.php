<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologyNames=[
            'html',
            'css',
            'javascript',
            'vue',
            'php'
        ];

        foreach ($technologyNames as $name) {
            $newTechnology= new Technology();
            $newTechnology->name= $name;
            $newTechnology->save();
        }
    }
}
