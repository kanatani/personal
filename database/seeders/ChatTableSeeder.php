<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\chat;

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
                'chatroom' => 1,
                'user_id' => 1,
                'reply_id' => 1
            ],
        ]);
    }
}
