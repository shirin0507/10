<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Beginner',
            'Elementary',
            'Pre Intermediate',
            'Intermediate',
            'Upper Intermediate',
            'Advanced',
            'Practice',
        ];
        foreach ($objs as $obj) {
            Branch::create(['name' => $obj]);
        }
    }
}
