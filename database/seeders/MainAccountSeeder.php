<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['code' => '1101', 'name' => 'Kas dan Bank'],
            ['code' => '1102', 'name' => 'Setara Kas'],
            ['code' => '1103', 'name' => 'Piutang Usaha'],
            ['code' => '1104', 'name' => 'Persediaan'],
            ['code' => '1105', 'name' => 'Aset Lancar Lainnya'],
            ['code' => '1200', 'name' => 'Aset Tetap'],
            ['code' => '120006', 'name' => 'Akumulasi Depresiasi Aset Tetap'],
            ['code' => '2101', 'name' => 'Hutang Usaha'],
            ['code' => '2102', 'name' => 'Kewajiban Jangka Pendek Lainnya'],
            ['code' => '3000', 'name' => 'Modal'],
            ['code' => '4000', 'name' => 'Pendapatan Operasional'],
            ['code' => '4401', 'name' => 'Diskon Penjualan'],
            ['code' => '6000', 'name' => 'Beban Operasional'],
            ['code' => '7100', 'name' => 'Pendapatan Di Luar Usaha'],
            ['code' => '7200', 'name' => 'Beban Di Luar Usaha'],
            ['code' => '7201', 'name' => 'Laba/Rugi Terealisasi'],
            ['code' => '7202', 'name' => 'Laba/Rugi Belum Terealisasi'],
            ['code' => '5101', 'name' => 'Beban Pokok Penjualan'],
            ['code' => '2201', 'name' => 'Hutang Jangka Panjang'],
        );

        DB::table('main_accounts')->insert($data);
    }
}
