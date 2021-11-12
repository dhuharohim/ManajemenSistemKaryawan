<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['code' => '01', 'name' => 'Bukan Pemungutan PPN'],
            ['code' => '02', 'name' => 'Pemungut Bendaharawan Pemerintah'],
            ['code' => '03', 'name' => 'Pemungut PPN'],
            ['code' => '04', 'name' => 'DPP Nilai Lain'],
            ['code' => '05', 'name' => 'Penyerahan Lainnya'],
            ['code' => '06', 'name' => 'PPN Tidak Dipungut'],
            ['code' => '07', 'name' => 'PPN Dibebaskan'],
            ['code' => '08', 'name' => 'Penyerahan Aset'],
        );

        DB::table('transaction_codes')->insert($data);
    }
}
