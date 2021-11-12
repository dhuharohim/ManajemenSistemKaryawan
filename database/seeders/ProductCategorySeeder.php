<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['name' => 'Alchemy'],
            ['name' => 'Alpha Amber Black'],
            ['name' => 'Alpha Amber Color'],
            ['name' => 'General'],
            ['name' => 'Shipment'],
            ['name' => 'Others'],
            ['name' => 'Coldset Color'],
            ['name' => 'Special Color'],
            ['name' => 'Fountain Solution'],
            ['name' => 'Packing'],
            ['name' => 'Press Chemical'],
            ['name' => 'Packaging'],
            ['name' => 'Maxxima Color'],
            ['name' => 'Maxxima Black'],
            ['name' => 'SF Special Color'],
            ['name' => 'SF Special Ink'],
            ['name' => 'Sheetfed Additive'],
            ['name' => 'Rayon Color'],
            ['name' => 'Rayon Black'],
            ['name' => 'UV Varnish'],
        );

        DB::table('product_categories')->insert($data);
    }
}
