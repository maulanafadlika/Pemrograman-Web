<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::insert([
            ['nama_kelas' => 'X IPA 1', 'wali_kelas' => 'Bapak Achmad Herry Pujianto S.Kom'],
            ['nama_kelas' => 'X IPA 2', 'wali_kelas' => 'Ibu Nuri Korinah S.Pd.I'],
            ['nama_kelas' => 'XI IPS 1', 'wali_kelas' => 'Bapak Solihin S.Pd.I'],
        ]);
    }
}
