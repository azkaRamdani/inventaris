<?php

namespace Database\Seeders;

use App\Models\Loans;
use Illuminate\Database\Seeder;

class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loans::create([
            'officer_id'    =>  1,
            'goods_id'      =>  1,
            'loans_date'    =>  '2022-10-18',
            'return_date'   =>  '2022-10-21',
            'status'        =>  2
        ]);

        Loans::create([
            'officer_id'    =>  1,
            'goods_id'      =>  3,
            'loans_date'    =>  '2022-10-18',
            'return_date'   =>  '2022-10-21',
            'status'        =>  2
        ]);

        Loans::create([
            'officer_id'    =>  1,
            'goods_id'      =>  3,
            'loans_date'    =>  '2022-10-18',
            'return_date'   =>  '2022-10-21',
            'status'        =>  2
        ]);
    }
}
