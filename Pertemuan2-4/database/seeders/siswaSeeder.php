<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacadesDB::table('siswa')->insert([
            'name' => 'Rajih Kharissuha',
            'alamat' => 'Perumahan Muktisari ',
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => "082339584778" 
            ]);
    }
}
