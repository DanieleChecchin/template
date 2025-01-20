<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeNames=[
            'full-stack',
            'front-end',
            'back-end',
            'database'
        ];

        foreach ($typeNames as $name) {
            $newType= new Type();
            $newType->name = $name;
            $newType->save();
        }
    }
}
