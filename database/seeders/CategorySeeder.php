<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  =>  'Kendaraan',
        ]);

        Category::create([
            'name'  =>  'Alat Kebersihan',
        ]);

        Category::create([
            'name'  =>  'Elektronik',
        ]);

        Category::create([
            'name'  =>  'Interior Kantor',
        ]);
    }
}
