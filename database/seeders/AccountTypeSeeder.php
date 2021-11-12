<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['code' => 'DEPR', 'name' => 'Akumulasi Penyusutan'],
            ['code' => 'OCAS', 'name' => 'Aset Lancar Lainnya'],
            ['code' => 'FASS', 'name' => 'Aset Tetap'],
            ['code' => 'BANK', 'name' => 'Kas dan Bank'],
            ['code' => 'OEXP', 'name' => 'Beban Lainnya'],
            ['code' => 'EXPS', 'name' => 'Beban'],
            ['code' => 'COGS', 'name' => 'Beban Pokok Penjualan'],
            ['code' => 'REVE', 'name' => 'Pendapatan'],
            ['code' => 'EQTY', 'name' => 'Modal'],
            ['code' => 'LTLY', 'name' => 'Kewajiban Jangka Panjang'],
            ['code' => 'OCLY', 'name' => 'Kewajiban Jangka Pendek'],
            ['code' => 'APAY', 'name' => 'Hutang Usaha'],
            ['code' => 'OINC', 'name' => 'Pendapatan Lainnya'],
            ['code' => 'INTR', 'name' => 'Persediaan'],
            ['code' => 'AREC', 'name' => 'Piutang Usaha'],
        );

        DB::table('account_types')->insert($data);
    }
}
