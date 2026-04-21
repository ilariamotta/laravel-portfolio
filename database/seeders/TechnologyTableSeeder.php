<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$technologies = [
    ["name" => "React", "color" => "#E89898"],
    ["name" => "Angular", "color" => "#C9C7FF"],
    ["name" => "Vue.js", "color" => "#EEF4F7"],
    ["name" => "Node.js", "color" => "#FFF1AD"],
    ["name" => "Laravel", "color" => "#AEEBE6"],
];

        foreach ($technologies as $technology) {
        $newTechnology = new Technology();

        $newTechnology->name = $technology["name"];
        $newTechnology->color = $technology["color"];

        $newTechnology->save();
    }
}
}