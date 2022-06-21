<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class DataCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count=0; $count < 1; $count++) {
            DB::table('data_centers')->insert([
                'name' => Str::random(10),
            ]);
        }
    }
}
