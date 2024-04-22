<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 11,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 11,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 12,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 12,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 250,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 13,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 13,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 14,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 250,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 14,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 350,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 15,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'barang_id' => 15,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 400,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}