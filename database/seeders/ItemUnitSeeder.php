<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['name' => 'Kg'],
            ['name' => 'Pcs'],
            ['name' => 'Liter'],
            ['name' => 'Lembar'],
            ['name' => 'Ton'],
            ['name' => 'Drum'],
        );
        
        DB::table('item_units')->insert($data);
    }
}
