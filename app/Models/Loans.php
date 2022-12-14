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

    public function borrower()
    {
        return $this->belongsTo(Borrower::class, 'borrower_id');
    }
    
    public function Loans()
    {
        return $this->belongsTo(Loans::class);
    }
    
        public static function getLoans()
        {
            $loans = Loans::select([
                'id',
                'officer_id',
                'borrower_id',
                'goods_id',
                'loans_date',
                'return_date',
                'status'
            ]);
            return $loans;
        }
    
    public static function getReportBorrows($request)
    {
        $borrows = Loans::select([
            'id',
            'goods_id',
            'borrow_id',
            'created_at',
        ])->where('status_loans', 1);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }

    public static function getReportDamaged($request)
    {
        $borrows = Loans::select([
            'id',
            'book_id',
            'borrow_id',
            'return_date',
        ])->where('return_condition', 2);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }

    public static function getReportLost($request)
    {
        $borrows = Loans::select([
            'id',
            'goods_id',
            'borrow_id',
            'return_date',
        ])->where('return_condition', 3);

        if(isset($request['startDate'])){
            $borrows->whereBetween('created_at', [$request['startDate'], $request['endDate']]);
        }

        return $borrows;
    }
}