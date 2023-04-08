<?php

namespace Database\Seeders;

//use App\Event;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //DB::table('events')->truncate();

        //Event::create([
        //'name' => "Laravel and Coffee",
        //'city' => "Dublin",
        //'venue' => "Cup of Joe",
        //'description' => "Let's learn Laravel together!"
        //]);
        //Event::create([
        //'name' => "IoT and the Raspberry Pi",
        //'city' => "Columbus",
        //'venue' => "Columbus Library",
        //'description' => "Weather monitoring with the Pi"
        //]);

        //$events = [
            //[
              //  'name'           => 'Laravel and Coffee',
            //    'city'          => 'Dublin',
                //'password'       => bcrypt('password'),
                //'remember_token' => null,
          //  ],
        //];

        //Event::insert($events);

        $this->call([EventsTableSeeder::class]);
    }
}
