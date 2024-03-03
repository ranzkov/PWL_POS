<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed untuk tabel t_penjualan_detail
        DB::table('t_detail_penjualan')->insert([
            // Detail penjualan untuk penjualan pertama (PJN001)
            ['penjualan_id' => 1, 'barang_id' => 1, 'harga' => 8000000, 'jumlah' => 1], // Contoh: Laptop
            ['penjualan_id' => 1, 'barang_id' => 2, 'harga' => 5000000, 'jumlah' => 2], // Contoh: Smartphone
            ['penjualan_id' => 1, 'barang_id' => 3, 'harga' => 3500000, 'jumlah' => 1], // Contoh: Tablet
            ['penjualan_id' => 1, 'barang_id' => 4, 'harga' => 50000, 'jumlah' => 3], // Contoh: Baju
            ['penjualan_id' => 1, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 2], // Contoh: Aki
            // Detail penjualan untuk penjualan kedua (PJN002)
            ['penjualan_id' => 2, 'barang_id' => 6, 'harga' => 65000, 'jumlah' => 1], // Contoh: Oli
            ['penjualan_id' => 2, 'barang_id' => 7, 'harga' => 200000, 'jumlah' => 1], // Contoh: Aki
            ['penjualan_id' => 2, 'barang_id' => 8, 'harga' => 85000, 'jumlah' => 1], // Contoh: Panci
            ['penjualan_id' => 2, 'barang_id' => 9, 'harga' => 25000, 'jumlah' => 1], // Contoh: Piring
            ['penjualan_id' => 2, 'barang_id' => 10, 'harga' => 125000, 'jumlah' => 1], // Contoh: Bola Basket
            // Detail penjualan untuk penjualan ketiga (PJN003)
            ['penjualan_id' => 3, 'barang_id' => 1, 'harga' => 8000000, 'jumlah' => 1], // Contoh: Laptop
            ['penjualan_id' => 3, 'barang_id' => 2, 'harga' => 5000000, 'jumlah' => 1], // Contoh: Smartphone
            ['penjualan_id' => 3, 'barang_id' => 3, 'harga' => 3500000, 'jumlah' => 1], // Contoh: Tablet
            ['penjualan_id' => 3, 'barang_id' => 4, 'harga' => 50000, 'jumlah' => 2], // Contoh: Baju
            ['penjualan_id' => 3, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 1], // Contoh: Aki
            // Detail penjualan untuk penjualan keempat (PJN004)
            ['penjualan_id' => 4, 'barang_id' => 6, 'harga' => 65000, 'jumlah' => 1], // Contoh: Oli
            ['penjualan_id' => 4, 'barang_id' => 7, 'harga' => 200000, 'jumlah' => 1], // Contoh: Aki
            ['penjualan_id' => 4, 'barang_id' => 8, 'harga' => 85000, 'jumlah' => 1], // Contoh: Panci
            ['penjualan_id' => 4, 'barang_id' => 9, 'harga' => 25000, 'jumlah' => 1], // Contoh: Piring
            ['penjualan_id' => 4, 'barang_id' => 10, 'harga' => 125000, 'jumlah' => 1], // Contoh: Bola Basket
            // Detail penjualan untuk penjualan kelima (PJN005)
            ['penjualan_id' => 5, 'barang_id' => 1, 'harga' => 8000000, 'jumlah' => 1], // Contoh: Laptop
            ['penjualan_id' => 5, 'barang_id' => 2, 'harga' => 5000000, 'jumlah' => 2], // Contoh: Smartphone
            ['penjualan_id' => 5, 'barang_id' => 3, 'harga' => 3500000, 'jumlah' => 1], // Contoh: Tablet
            ['penjualan_id' => 5, 'barang_id' => 4, 'harga' => 50000, 'jumlah' => 3], // Contoh: Baju
            ['penjualan_id' => 5, 'barang_id' => 5, 'harga' => 200000, 'jumlah' => 2], // Contoh: Aki
            // Detail penjualan untuk penjualan keenam (PJN006)
            // Lanjutkan dengan menambahkan detail penjualan lainnya di sini...
            ['penjualan_id' => 6, 'barang_id' => 6, 'harga' => 65000, 'jumlah' => 1], // Contoh: Oli
            ['penjualan_id' => 6, 'barang_id' => 7, 'harga' => 200000, 'jumlah' => 1], // Contoh: Aki
            ['penjualan_id' => 6, 'barang_id' => 8, 'harga' => 85000, 'jumlah' => 1], // Contoh: Panci
            ['penjualan_id' => 6, 'barang_id' => 9, 'harga' => 25000, 'jumlah' => 1], // Contoh: Piring
            ['penjualan_id' => 6, 'barang_id' => 10, 'harga' => 125000, 'jumlah' => 1], // Contoh: Bola Basket
        ]);
    }
}
