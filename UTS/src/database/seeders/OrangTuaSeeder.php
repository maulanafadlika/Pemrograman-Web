<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrangTua;

class OrangTuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orangtua::insert([
            [
                'nama_ayah' => 'Pak Budi',
                'nama_ibu' => 'Bu Ani',
                'no_hp' => '081234567890',
                'pekerjaan_ayah' => 'PNS',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
            ],
            [
                'nama_ayah' => 'Pak Tono',
                'nama_ibu' => 'Bu Lina',
                'no_hp' => '089876543210',
                'pekerjaan_ayah' => 'Wiraswasta',
                'pekerjaan_ibu' => 'Guru',
            ],
        ]);
    }
}
