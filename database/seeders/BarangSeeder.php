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
        $data = [];
        $id = 1;

        for ($supplier = 1; $supplier <= 3; $supplier++) {
            for ($i = 1; $i <= 5; $i++) {
                $data[] = [
                    'barang_id' => $id,
                    'barang_kode' => 'BRG' . str_pad($id, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Barang Supplier ' . $supplier . ' - ' . $i,
                    'kategori_id' => $supplier, // biar rapi dan konsisten
                    'supplier_id' => $supplier,
                    'harga_beli' => 10000 + ($i * 1000),
                    'harga_jual' => 15000 + ($i * 1000),
                ];
                $id++;
            }
        }

        DB::table('m_barang')->insert($data);
    }
}
