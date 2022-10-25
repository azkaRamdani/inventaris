<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    public function Officer()
    {
        return $this->belongsTo(User::class, 'officer_id');
    }

    public function Goods()
    {
        return $this->belongsTo(Goods::class);
    }

    public static function getLoans()
    {
        $loans = Loans::select([
            'id',
            'officer_id',
            'goods_id',
            'loans_date',
            'return_date',
            'status'
        ]);
        return $loans;
    }
}
