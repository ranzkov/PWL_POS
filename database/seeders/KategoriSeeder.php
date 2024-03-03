<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'KAT001', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'KAT002', 'kategori_nama' => 'Fashion'],
            ['kategori_kode' => 'KAT003', 'kategori_nama' => 'Otomotif'],
            ['kategori_kode' => 'KAT004', 'kategori_nama' => 'Peralatan Rumah Tangga'],
            ['kategori_kode' => 'KAT005', 'kategori_nama' => 'Olahraga'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
