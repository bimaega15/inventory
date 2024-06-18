<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonfigurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pengaturan::create([
            'namaaplikasi_pengaturan' => 'Inventory App',
            'namausaha_pengaturan' => 'PT. Inventory Laras',
            'alamat_pengaturan' => 'Alamat Invetory Laras',
            'notelepon_pengaturan' => '08283928',
            'deskripsi_pengaturan' => 'Deskripsi Inventory Laras',
            'logoaplikasi_pengaturan' => 'profile.jpg',
        ]);
    }
}
