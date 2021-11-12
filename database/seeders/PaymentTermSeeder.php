<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['name' => 'COD - Cash On Delivery'],
            ['name' => 'Net 30'],
            ['name' => 'Net 45'],
            ['name' => 'Net 60'],
            ['name' => 'Net 65'],
            ['name' => 'Net 75'],
            ['name' => 'Net 90'],
        );

        DB::table('payment_terms')->insert($data);
    }
}
