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
    public function run(): void
    {
        $locations = Location::pluck('id')->toArray();
        $classrooms = [
            'A1',
            'A2',
            'A3',
            'A4',
            'A5',
            'B1',
            'B2',
            'B3',
            'B4',
            'B5',
        ];

        foreach ($classrooms as $classroomData) {
            Classroom::create([
                'name' => $classroomData,
                'location_id' => $locations->id,
            ]);
        }
    }
}
