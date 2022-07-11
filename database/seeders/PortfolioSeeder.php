<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $POST = Product::create([
        //     'imageProduct' => 'arasya.png',
        //     'namaVendor' => 'Arasya Wedding'
        // ]);

        \DB::table('portfolios')->insert([
            'vendor_id' => '1',
            'id_kategori' => '1',
            'image_product' => 'arasya.png',
            'nama_event' => 'Wedding of Zara & Michael'
        ]);
        //
    }
}
