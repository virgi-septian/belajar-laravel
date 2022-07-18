<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['branchNo' => 'B005', 'bAddress' => '22 Deer Rd,London'],
            ['branchNo' => 'B007', 'bAddress' => '16 Argyll St,Aberdeen'],
            ['branchNo' => 'B003', 'bAddress' => '163 Main St,Glasgow'],
        ];

        DB::table('branch')->insert($sample);
    }
}