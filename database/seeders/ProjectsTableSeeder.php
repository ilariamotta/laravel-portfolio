<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


// importazione faker 
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {
                        $newproject = new Project();

            $newproject->name = $faker->sentence(3);
            $newproject->customer = $faker->company();
            $newproject->time = $faker->date('Y-m-d');
            $newproject->description = $faker->paragraph();

            $newproject->save();
        }
    }
}
