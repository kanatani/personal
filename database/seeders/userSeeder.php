<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'userid' => rand(),
                'name' => 'naoki',
                'password' => '0616',
                'email' => 'naoki@icloud.com'
            ],
        ]);
    }
}
