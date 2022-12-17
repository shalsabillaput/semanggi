<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            "nama" => "Makanan Frozen",
            "slug" => "makanan-frozen"
        ]);

        Kategori::create([
            "nama" => "Makanan Kering",
            "slug" => "makanan-kering"
        ]);

        Kategori::create([
            "nama" => "Minuman",
            "slug" => "minuman"
        ]);
    }
}
