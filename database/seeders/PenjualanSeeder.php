<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed untuk tabel t_penjualan
        DB::table('t_penjualan')->insert([
            ['user_id' => 1, 'pembeli' => 'John Doe', 'penjualan_kode' => 'PJN001', 'penjualan_tanggal' => '2024-02-23 08:00:00'],
            ['user_id' => 2, 'pembeli' => 'Jane Doe', 'penjualan_kode' => 'PJN002', 'penjualan_tanggal' => '2024-02-24 10:30:00'],
            ['user_id' => 3, 'pembeli' => 'Alice', 'penjualan_kode' => 'PJN003', 'penjualan_tanggal' => '2024-02-25 14:45:00'],
            ['user_id' => 1, 'pembeli' => 'Bob', 'penjualan_kode' => 'PJN004', 'penjualan_tanggal' => '2024-02-26 09:15:00'],
            ['user_id' => 2, 'pembeli' => 'Charlie', 'penjualan_kode' => 'PJN005', 'penjualan_tanggal' => '2024-02-27 11:20:00'],
            ['user_id' => 3, 'pembeli' => 'Eve', 'penjualan_kode' => 'PJN006', 'penjualan_tanggal' => '2024-02-28 16:30:00'],
            ['user_id' => 1, 'pembeli' => 'Grace', 'penjualan_kode' => 'PJN007', 'penjualan_tanggal' => '2024-02-29 08:45:00'],
            ['user_id' => 2, 'pembeli' => 'Henry', 'penjualan_kode' => 'PJN008', 'penjualan_tanggal' => '2024-03-01 10:10:00'],
            ['user_id' => 3, 'pembeli' => 'Ivy', 'penjualan_kode' => 'PJN009', 'penjualan_tanggal' => '2024-03-02 14:55:00'],
            ['user_id' => 1, 'pembeli' => 'Jack', 'penjualan_kode' => 'PJN010', 'penjualan_tanggal' => '2024-03-03 09:25:00'],
        ]);
    }
}
