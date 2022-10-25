<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Goods extends Model
{
    use HasFactory, AutoNumberTrait;

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Loans()
    {
        return $this->hasMany(Loans::class);
    }

    public function getAutoNumberOptions()
    {
        return [
            'code'  =>  [
                'format'    =>  'BRG -',
                'length'    =>  5
            ]
            ];
    }

    public static function getGoods($request)
    {
        $goods = Goods::select([
            'id',
            'name',
            'condition',
            'status',
        ]);

        return $goods;
    }
}
