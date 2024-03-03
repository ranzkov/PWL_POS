<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the barang IDs from the m_barang table
        $barangIds = DB::table('m_barang')->pluck('barang_id');

        // Initialize an empty array to store the stock data
        $stockData = [];

        // Generate stock data for each barang
        foreach ($barangIds as $barangId) {
            // Generate random stock quantity for each barang
            $stokJumlah = rand(50, 200);

            // Add the stock data to the array
            $stockData[] = [
                'barang_id' => $barangId,
                'stok_jumlah' => $stokJumlah,
                'stok_tanggal' => now(), // Assuming the current date and time
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert the stock data into the t_stok table
        DB::table('t_stok')->insert($stockData);
    }
}
