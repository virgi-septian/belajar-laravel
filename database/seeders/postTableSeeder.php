<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['tittle' => 'Assalaam Juara', 'content' => 'Assalaam Studio'],
            ['tittle' => 'Assalaam Berkuban', 'content' => 'Assalaam Studio'],
            ['tittle' => 'Assalaam Bersholawat', 'content' => 'Assalaam Studio'],
        ];

        DB::table('posts')->insert($sample);
    }

}
