<?php

use App\Band;
use App\Genre;
use App\Music;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $users = factory(User::class, 50)->create();
        $genres = factory(Genre::class, 20)->create();
        $bands = factory(Band::class, 20)->create();



    }
}
