<?php

use Illuminate\Database\Seeder;

class agesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ages = [
            [1, "10代以下", 1],
            [2, "20代", 2],
            [3, "30代", 3],
            [4, "40代", 4],
            [5, "50代", 5],
            [6, "60代以上", 6]
        ];

        foreach($ages as $age) {
            DB::table('ages')->insert([
                'age'=>$age[1],
                'sort'=>$age[2]
            ]);
        }
    }
}
