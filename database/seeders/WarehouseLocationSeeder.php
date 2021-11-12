<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['name' => 'Rawa Bebek', 'active' => TRUE],
            ['name' => 'Tangerang', 'active' => TRUE],
        );
        
        DB::table('warehouse_locations')->insert($data);
    }
}
