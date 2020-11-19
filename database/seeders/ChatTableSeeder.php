<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat')->insert([
            [
                'user_id' => 1,
                'reply_id' => 1,
                'message' => 'よろしく'
            ],
        ]);
    }
}
