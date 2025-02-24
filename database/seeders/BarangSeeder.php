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
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'ELK001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 10000000,
                'harga_jual' => 12000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'ELK002',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'PKN001',
                'barang_nama' => 'T-Shirt',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'PKN002',
                'barang_nama' => 'Jeans',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Biscuit',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Chips',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'KMS001',
                'barang_nama' => 'Lipstick',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'KMS002',
                'barang_nama' => 'Foundation',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'ALP001',
                'barang_nama' => 'Pen',
                'harga_beli' => 2000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'ALP002',
                'barang_nama' => 'Notebook',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ]
        ];

        DB::table('m_barang')->insert($data);
    }
}
