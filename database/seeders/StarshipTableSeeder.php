<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Models;
use App\Models\Starship;

class StarshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Starship::create([
            'name' => 'CR90 corvette',
            'image' => 'https://c4.wallpaperflare.com/wallpaper/832/896/63/star-wars-cr90-corvette-tantive-iv-wallpaper-preview.jpg',
            'model' => 'CR90 corvette',
            'manufacturer' => 'Corellian Engineering Corporation',
            'crew_size' => '30-165',
            'cost' => '3500000',
            'starship_class' => 1,
            'cargo_capacity' => '13000000',
            'max_atmosphering_speed' => '950',
            'MGLT' => '60'
        ]);

        Starship::create([
            'name' => 'Star Destroyer',
            'image' => 'https://i.pinimg.com/originals/56/71/2f/56712f989d2d840d78b264ebfbda484e.jpg',
            'model' => 'Imperial I-class Star Destroyer',
            'manufacturer' => 'Kuat Drive Yards',
            'crew_size' => '47,060',
            'cost' => '150000000',
            'starship_class' => 2,
            'cargo_capacity' => '36000000',
            'max_atmosphering_speed' => '975',
            'MGLT' => '60'
        ]);

        Starship::create([
            'name' => 'Death Star',
            'image' => 'https://i.pinimg.com/736x/6c/e6/f1/6ce6f14bee719aa588e566298005c097.jpg',
            'model' => 'DS-1 Orbital Battle Station',
            'manufacturer' => 'DS-1 Orbital Battle Station',
            'crew_size' => '342,953',
            'cost' => '100000000',
            'starship_class' => 3,
            'cargo_capacity' => '100000000',
            'max_atmosphering_speed' => '1',
            'MGLT' => '10'
        ]);

        Starship::create([
            'name' => 'Millennium Falcon',
            'image' => 'https://www.golfdigest.com/content/dam/images/golfdigest/fullset/2018/04/16/5ad4e8c370e68e282f66ed87_falcon.png',
            'model' => 'YT-1300 light freighter',
            'manufacturer' => 'Corellian Engineering Corporation',
            'crew_size' => '4',
            'cost' => '100000',
            'starship_class' => 4,
            'cargo_capacity' => '100000',
            'max_atmosphering_speed' => '1050',
            'MGLT' => '75'
        ]);        
    }
}
