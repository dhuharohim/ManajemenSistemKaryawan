<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['name' => 'Faktur Pajak'],
            ['name' => 'Dokumen Dipersamakan'],
            ['name' => 'Dokumen Ekspor (PEB)'],
            ['name' => 'Digunggun'],
        );

        DB::table('document_codes')->insert($data);
    }
}
