<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            // Data untuk kategori Elektronik
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 8000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 5000000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Tablet', 'harga_beli' => 2000000, 'harga_jual' => 3500000],
            // Data untuk kategori Fashion
            ['kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Baju', 'harga_beli' => 20000, 'harga_jual' => 50000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Celana', 'harga_beli' => 30000, 'harga_jual' => 60000],
            // Data untuk kategori Otomotif
            ['kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Oli', 'harga_beli' => 50000, 'harga_jual' => 65000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Aki', 'harga_beli' => 170000, 'harga_jual' => 200000],
            // Data untuk kategori Peralatan Rumah Tangga
            ['kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Panci', 'harga_beli' => 70000, 'harga_jual' => 85000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG009', 'barang_nama' => 'Piring', 'harga_beli' => 15000, 'harga_jual' => 25000],
            // Data untuk kategori Olahraga
            ['kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Bola Basket', 'harga_beli' => 100000, 'harga_jual' => 125000],
        ]);
    }
}
