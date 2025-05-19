<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat role jika belum ada
        $role = Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'web',
        ]);

        // Buat user admin jika belum ada
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Ganti sesuai kebutuhan
                'remember_token' => Str::random(10),
            ]
        );

        // Assign role jika belum memiliki
        if (!$user->hasRole('super_admin')) {
            $user->assignRole('super_admin');
        }

        // Jalankan seeder lainnya
        $this->call([
            KelasSeeder::class,
            OrangTuaSeeder::class,
            DataMuridSeeder::class,
        ]);
    }
}
