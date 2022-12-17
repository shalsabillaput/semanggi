<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            "nama" => "Cookies",
            "kategori_id" => 2,
            "slug" => "cookies",
            "harga" => 28000,
            "berat" => 250.0,
            "gambar" => "product-1.jpg",
            "deskripsi" => "Cookies adalah kue yang terbuat dari bahan dasar tepung yang umumnya dibuat dari tepung terigu,
                            gula halus, telur ayam, vanilli, margarine, tepung maizena,
                            baking powder, dan susu bubuk instant. Tekstur cookies mempunyai tekstur yang
                            renyah dan tidak mudah hancur seperti dengan kue-kue kering pada umumnya. Produk cookies yang kami produksi menggunakan
                            bahan tambahan yang berbeda dari cookies yang lainnya karena menggunakan tepung semanggi yang dapat membuat cita rasa baru
                            untuk cookies ini."
        ]);

        Barang::create([
            "nama" => "Kue Dahlia",
            "kategori_id" => 2,
            "slug" => "kue-dahlia",
            "harga" => 26000,
            "berat" => 250.0,
            "gambar" => "product-2.jpeg",
            "deskripsi" => "Kue Dahlia adalah kue yang terbuat dari bahan dasar tepung yang umumnya dibuat dari tepung terigu,
                            gula halus, telur ayam, vanilli, margarine, baking powder, dan susu bubuk instant. Kue dahlia memiliki tekstur yang renyah
                            serta bentuknya yang cantik menyerupai bunga yang sedang mekar. Produk kue dahlia yang kami produksi menggunakan
                            bahan tambahan yang berbeda dari kue dahlia yang lainnya karena menggunakan tepung semanggi yang dapat membuat cita rasa baru
                            untuk kue dahlia ini."
        ]);

        Barang::create([
            "nama" => "Kue Kastengel",
            "kategori_id" => 2,
            "slug" => "kue-kastengel",
            "harga" => 30000,
            "berat" => 250.0,
            "gambar" => "product-3.jpeg",
            "deskripsi" => "Kue Kastengel adalah kue kering yang dibuat dari adonan tepung terigu, telur, margarin, dan parutan keju. Kue ini
                            memiliki tekstur yang tidak begitu renyah, namun rasanya yang sangat khas yaitu gurih asin yang berasal dari parutan keju yang
                            ditambahkan. Produk kue kastengel yang kami produksi menggunakan bahan tambahan yang berbeda dari kue kastengel yang lainnya karena menggunakan
                            tepung semanggi yang dapat membuat cita rasa baru untuk kue kastengel ini."
        ]);

        Barang::create([
            "nama" => "Kue Nastar",
            "kategori_id" => 2,
            "slug" => "kue-nastar",
            "harga" => 30000,
            "berat" => 250.0,
            "gambar" => "product-4.jpeg",
            "deskripsi" => "Kue Nastar adalah kue kering dari adonan tepung terigu, mentega, dan telur yang diisi dengan selai nanas, cokelat,
                            maupun rasa lainnya. Secara garis besar kue ini beisikan selai nanas. Produk kue nastar yang kami produksi menggunakan bahan tambahan yang berbeda
                            dari kue nastar yang lainnya karena menggunakan tepung semanggi yang dapat membuat cita rasa baru untuk kue kastengel ini."
        ]);

        Barang::create([
            "nama" => "Pecel Semanggi",
            "kategori_id" => 1,
            "slug" => "pecel-semanggi",
            "harga" => 20000,
            "berat" => 250.0,
            "gambar" => "product-6.jpg",
            "deskripsi" => "Pecel Semanggi merupakan makanan khas Surabaya, yang dibuat dari daun semanggi yang dikukus dan kemudian dinikmati dengan sambal atau bumbu
                            semanggi. Bumbu yang digunakan terbuat dari gula jawa, terasi, dan cabai."
        ]);

        Barang::create([
            "nama" => "Stik Semanggi",
            "kategori_id" => 1,
            "slug" => "stik-semanggi",
            "harga" => 10000,
            "berat" => 250.0,
            "gambar" => "product-7.jpg",
            "deskripsi" => "Stik merupakan salah satu camilan tradisional yang banyak digemari dan mudah dibuat di rumah sendiri. Terbuat dari tepung terigu dengan
                            penambahan mentega dan telur serta bumbu yang bisa mebuatnya memiliki cita rasa gurih. Berbentuk stik tipis yang renyah saat dimakan.
                            Camilan ini diolah dengan cara digoreng. Produk stik yang kami produksi menggunakan bahan tambahan yang berbeda
                            dari stik yang lainnya karena menggunakan tepung semanggi yang dapat membuat cita rasa baru untuk stik ini."
        ]);

        Barang::create([
            "nama" => "Mie Semanggi",
            "kategori_id" => 1,
            "slug" => "mie-semanggi",
            "harga" => 15000,
            "berat" => 250.0,
            "gambar" => "product-8.jpg",
            "deskripsi" => "Mie Semanggi adalah produk makanan yang dibuat dari tepung gandum atau tepung terigu dengan penambahan bahan makanan berupa tepung semanggi
                            yang membuat citarasa dari mie semanggi berbeda dengan mie yang lain."
        ]);

        Barang::create([
            "nama" => "Nugget Semanggi",
            "kategori_id" => 1,
            "slug" => "nugget-semanggi",
            "harga" => 28000,
            "berat" => 250.0,
            "gambar" => "product-9.jpeg",
            "deskripsi" => "Nugget merupakan produk olahan dari daging giling, diberi penambahan bumbu, dicetak kemudian dilumuri dengan tepung roti pada bagian permukaannya dan digoreng.
                            Bahan utama pembuatan nugget biasanya berasal dari bahan pangan hewani yaitu daging ayam. Produk nugget yang kami buat menggunakan tepung semanggi yang
                            membuat cita rasa nugget semanggi berbeda dengan nugget yang lain."
        ]);

        Barang::create([
            "nama" => "Siomay",
            "kategori_id" => 1,
            "slug" => "siomay",
            "harga" => 23000,
            "berat" => 250.0,
            "gambar" => "product-11.jpeg",
            "deskripsi" => "Siomay adalah daging ayam cincang yang dibungkus kulit yang tipis dari tepung terigu. Walaupun demikian, siomai juga dibuat dari udang, daging kepiting,
                            atau daging sapi. Produk nugget yang kami buat menggunakan tepung semanggi yang membuat cita rasa nugget semanggi berbeda dengan nugget yang lain."
        ]);
        Barang::create([
            "nama" => "Tahu Bakso Semanggi",
            "kategori_id" => 1,
            "slug" => "tahu-bakso-semanggi",
            "harga" => 17000,
            "berat" => 250.0,
            "gambar" => "product-12.jpg",
            "deskripsi" => "Tahu Bakso Semanggi adalah makanan yang terbuat daging ayam cincang yang dibungkus dengan tahu. Walaupun demikian, Tahu Bakso juga dibuat dari campuran tepung terigu dan tepung tapioka serta tepung semanggi.
             Produk tahu bakso yang kami buat menggunakan tepung semanggi yang membuat cita rasa nugget semanggi berbeda dengan tahu bakso yang lain"
        ]);

        Barang::create([
            "nama" => "Jus Semanggi",
            "kategori_id" => 3,
            "slug" => "jus-semanggi",
            "harga" => 9000,
            "berat" => 300.0,
            "gambar" => "product-13.jpg",
            "deskripsi" => "Jus Semanggi merupakan salah satu produk minuman yang kami produksi. Jus Semanggi menggunakan bahan utama semanggi yang banyak khasiatnya bagi kesehatan.
            Rasa dari jus semanggi ini hampir mirip dengan minuman matcha atau greentea."
        ]);

        Barang::create([
            "nama" => "Teh Telang",
            "kategori_id" => 3,
            "slug" => "teh-telang",
            "harga" => 8000,
            "berat" => 300.0,
            "gambar" => "product-15.jpg",
            "deskripsi" => "Teh bunga telang tidak mengandung kafein, karbohidrat, lemak, dan kolesterol sehingga aman digunakan untuk diet. Konsumsi teh bunga telang dapat meningkatkan energi,
            menyegarkan otak, dan mampu meningkatkan stamina tubuh."
        ]);

        Barang::create([
            "nama" => "Teh Rosella",
            "kategori_id" => 3,
            "slug" => "teh-rosella",
            "harga" => 8000,
            "berat" => 300.0,
            "gambar" => "product-14.jpg",
            "deskripsi" => "Teh rosella adalah teh yang terbuat dari bunga rosella. Bunga rosella itu sendiri adalah bunga berwarna merah yang termasuk jenis tanaman perdu yang dapat dijadikan
            teh herbal yang menyehatkan tubuh. Bunga rosella yang dijadikan teh memiliki kemampuan menyembuhkan 4 kali lebih besar daripada daun kumis kucing."
        ]);
    }
}
