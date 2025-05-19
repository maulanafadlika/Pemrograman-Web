<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataMurid;

class DataMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataMurid::create([
            'nama' => 'Ahmad Mudzakir Amin',
            'nis' => '98987',
            'nisn' => '0123456789',
            'tempat_tanggal_lahir' => 'Tangerang 17 Juni 2001',
            'jenis_kelamin' => 'Laki-Laki', 
            'agama' => 'Islam',
            'kewarganegaraan' => 'WNI', 
            'alamat' => 'Jl. Contoh No. 123, Tangerang',
            'kelas_id' => 1, 
            'orangtua_id' => 1 
        ]);

        DataMurid::create([
            'nama' => 'Sitilok Mandi',
            'nis' => '14933',
            'nisn' => '0123456700',
            'tempat_tanggal_lahir' => 'Badodon 23 November 2003',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'kewarganegaraan' => 'WNI', 
            'alamat' => 'Jl. tanjakan turunan No. 6969, Papua Selatan',
            'kelas_id' => 2, 
            'orangtua_id' => 2 
        ]);
    }
}
