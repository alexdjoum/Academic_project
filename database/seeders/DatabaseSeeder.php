<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use app\Models\Event
use Illuminate\Support\Facades\DB;
//use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();Undefined variable $faker

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call('EventsTableSeeder');
        //$this->call([EventsTableSeeder::class]);
        DB::table('events')->insert([
            'id' => 2,
            'namecity' => 'Alexi',
            'city' => 'Dschang',
            //'password'       => bcrypt('password'),
            //'remember_token' => null,
        ]);

        DB::table('events')->insert([
            'id' => 3,
            'namecity' => 'CABREL IGOR',
            'city' => 'YAOUNDE',
            //'password'       => bcrypt('password'),
            //'remember_token' => null,
        ]);

        DB::table('events')->insert([
            'id' => 4,
            'namecity' => 'CAROL BRENDA',
            'city' => 'YAOUNDE',
            //'password'       => bcrypt('password'),
            //'remember_token' => null,
        ]);

        DB::table('events')->insert([
            'id' => 5,
            'namecity' => 'MAGALA',
            'city' => 'YAOUNDE',
            //'password'       => bcrypt('password'),
            //'remember_token' => null,
        ]);

        DB::table('events')->insert([
            ['id' => 7, 'namecity' => 'Boris', 'city' => 'Paris'],
            ['id' => 8, 'namecity' => 'Nils', 'city' => 'Deutshland'],
            ['id' => 9, 'namecity' => 'Stephanie', 'city' => 'Belgique'],
            ['id' => 10, 'namecity' => 'Isidore', 'city' => 'Quebec'],
            ['id' => 11, 'namecity' => 'Juns', 'city' => 'Lille'],
            ['id' => 12, 'namecity' => 'Jordi', 'city' => 'Canada'],
        ]);

        //Event::insert($events);
    }
}
