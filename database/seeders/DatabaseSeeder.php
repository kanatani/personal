<?php

namespace Database\Seeders;

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
        $this->call(PersonSeeder::class);
	    $this->call(favoriteTableSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(TestTableSeeder::class);
        $this->call(userSeeder::class);
        $this->call(ChatTableSeeder::class);
        $this->call(CommunityTableSeeder::class);
        $this->call(ChatMessageTableSeeder::class);
    }
}
