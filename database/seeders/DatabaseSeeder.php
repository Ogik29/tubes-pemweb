<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // Core seeders (minimal set)
            RoleSeeder::class,
            UserSeeder::class,
            EventSeeder::class,
            KategoriPertandinganSeeder::class,
            JenisPertandinganSeeder::class,
            RentangUsiaSeeder::class,
            KelasSeeder::class,
            KelasPertandinganSeeder::class,
            ContingentSeeder::class,
            // PlayerCategorySeeder::class,
            // PlayerSeeder::class,
        ]);
    }
}
