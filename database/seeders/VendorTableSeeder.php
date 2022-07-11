<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('vendors')->insert([
            'nama_vendor' => 'Arasya Wedding',
        ]);
    }
}
