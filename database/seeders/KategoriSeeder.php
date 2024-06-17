<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'namakategori' => 'Bahan baku'
        ]);
        Kategori::create([
            'namakategori' => 'Kemasan'
        ]);
        Kategori::create([
            'namakategori' => 'Peralatan'
        ]);
        Kategori::create([
            'namakategori' => 'Bahan Habis Pakai'
        ]);
    }
}
