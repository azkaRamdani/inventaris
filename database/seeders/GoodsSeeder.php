<?php

namespace Database\Seeders;

use App\Models\Goods;
use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Goods::create([
            'category_id'   =>  1,
            'name'          =>  'Motor Bobrok',
            'condition'     =>  1,
            'status'        =>  true,
            'image'         =>  'motorbobrok.jpg'
        ]);

        Goods::create([
            'category_id'   =>  1,
            'name'          =>  'Motor Bebek',
            'condition'     =>  1,
            'status'        =>  true,
            'image'         =>  'motorbebek.jpg'
        ]);

        Goods::create([
            'category_id'   =>  2,
            'name'          =>  'Sapu',
            'condition'     =>  1,
            'status'        =>  true,
            'image'         =>  'sapu.jpg'
        ]);

        Goods::create([
            'category_id'   =>  2,
            'name'          =>  'Ember',
            'condition'     =>  1,
            'status'        =>  true,
            'image'         =>  'ember.jpg'
        ]);
    }
}
