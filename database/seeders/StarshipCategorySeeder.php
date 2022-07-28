<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Models;
use App\Models\StarshipCategory;

class StarshipCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StarshipCategory::create([
            'title' => 'Corvette'
        ]);

        StarshipCategory::create([
            'title' => 'Star Destroyer'
        ]);

        StarshipCategory::create([
            'title' => 'Deep Space Mobile Battlestation'
        ]);

        StarshipCategory::create([
            'title' => 'Light freighter'
        ]);        
    }
}
