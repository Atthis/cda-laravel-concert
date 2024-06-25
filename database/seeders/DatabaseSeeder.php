<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Category;
use App\Models\City;
use App\Models\Costumer;
use App\Models\Event;
use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'password'
        ]);

        // $categories = Category::factory(5)->create();

        $cities = City::factory(8)->create();
        
        $places = Place::factory(10)->recycle($cities)->create();
        
        $artists = Artist::factory(10)->create();
        $costumers = Costumer::factory(5)->create();

        $events = Event::factory(8)->create();

        // $this->call([
        //     CategorySeeder::class,
        //     CitySeeder::class,
        //     PlaceSeeder::class,
        //     ArtistSeeder::class,
        //     EventSeeder::class,
        //     CostumerSeeder::class
        // ]);
    }
}
