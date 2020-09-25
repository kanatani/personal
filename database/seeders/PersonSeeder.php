<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            [
                'name' => '金谷尚輝',
                'password' => 'Naokiokane0616',
                'email' => 'naokiokane@icloud.com'
            ],
        ]);
    }
}
