<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Laptop', 'merk'=>'Asus', 'harga'=>10000000],           
            ['nama_barang'=>'HP', 'merk'=>'POCO', 'harga'=>5000000],           
            ['nama_barang'=>'Kulkas', 'merk'=>'Politron', 'harga'=>3000000],           
            ['nama_barang'=>'TV', 'merk'=>'SPC', 'harga'=>8000000],           
            ['nama_barang'=>'Lampu', 'merk'=>'Panasonic', 'harga'=>100000]          
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
