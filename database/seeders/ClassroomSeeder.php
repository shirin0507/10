<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Classroom;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $locations = Location::pluck('id')->toArray();
        $classrooms = [
            ['name' => 'A1'],
            ['name' => 'B3'],
            ['name' => 'C7'],
            ['name' => 'D5'],
            ['name' => 'D4'],
            ['name' => 'A5'],
            ['name' => 'A10'],
            ['name' => 'B13'],
            ['name' => 'B2'],
            ['name' => 'A4'],
        ];

        foreach ($classrooms as $classroomData) {
            Classroom::create([
                'name' => $classroomData['name'],
                'location_id' => Location::inRandomOrder()->first()->id,
            ]);
        }
    }
}
