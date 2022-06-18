<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            'title' => '奄美島ツアー1',
            'detail' => '7/21~7/24にかけて行います。',
            'price' => 20000,
        ]);

        DB::table('tours')->insert([
            'title' => '奄美島ツアー2',
            'detail' => '8/13~8/16にかけて行います。',
            'price' => 20000,
        ]);

        DB::table('tours')->insert([
            'title' => '奄美島・沖縄ツアー',
            'detail' => '8/11~8/15にかけて行います。',
            'price' => 35000,
        ]);
    }
}
