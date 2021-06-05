<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1 ->nbi = "1461900041";
        $mhs1 ->nama_mhs = "Gito Pramana Karya";
        $mhs1 ->save();
        
        $mhs1 = new Mahasiswa();
        $mhs1 ->nbi = "1461900043";
        $mhs1 ->nama_mhs = "M Rizky Sulistyawan";
        $mhs1 ->save();
    }
}
