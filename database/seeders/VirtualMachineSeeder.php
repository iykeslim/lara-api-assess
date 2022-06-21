<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VirtualMachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($count=0; $count < 10; $count++) {
            DB::table('virtual_machines')->insert([
                'data_center_id' => 1,
                'CPU_Size' => random_int(10, 100),
                'RAM_Size' => random_int(2, 100),
                'HDD_Size' => random_int(100, 1000),
            ]);
        }
    }
}
