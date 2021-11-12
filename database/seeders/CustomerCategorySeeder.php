<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['name' => 'End User'],
            ['name' => 'Reseller'],
            ['name' => 'Umum'],
            ['name' => 'Agen'],
            ['name' => 'Internal'],
        );
        
        DB::table('customer_categories')->insert($data);
    }
}
