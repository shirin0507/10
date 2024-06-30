<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $objs = [
            'Mir-1',
            'Anew',
            'Univermag',
        ];

        foreach ($objs as $obj) {
            Location::create(['name' => $obj]);
        }

        //
    }
}
