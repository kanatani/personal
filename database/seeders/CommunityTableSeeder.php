<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('community')->insert([
            [
                'groupid' => 2,
                'user_id' => 12,
                'member' => 1,
                'name' => '空手',
                'image' => 'fhfh.jpg',
                'category' => 'スポーツ',
            ],
        ]);
    }
}
