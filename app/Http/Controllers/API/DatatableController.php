<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class DatatableController extends Controller
{
    public function getCategory(Request $request)
    {
        $data = \App\Models\Category::getCategory($request->query());
        return DataTables::of($data)->addcolumn('total_goods', function($data){
            return $data->Goods->count();
        })->make(true);
    }

    public function getGoods(Request $request)
    {
    $data = \App\Models\Goods::getGoods($request->query());
    return DataTables::of($data)->make(true);
    }

    public function getLoans(Request $request)
    {
        $data = \App\Models\Loans::getLoans($request->query());
        return DataTables::of($data)->addcolumn('officer_name', function ($data){
            return $data->Officer->name;
        })->addcolumn('borrower_name', function ($data){
            return $data->borrower->name;
        })->addcolumn('goods_name', function ($data){
            return $data->Goods->name;
        })->make(true);
    }
    
    public function getReportLoans(Request $request)
    {
        $data = \App\Models\Loans::getReportLoans($request->query());
        return DataTables::of($data)->addColumn('borrower_name', function($data){
            return $data->Borrow->Borrower->name;
        })->addColumn('Goods_name', function($data){
            return $data->Book->title;
        })->make(true);
    }

    public function getReportDamaged(Request $request)
    {
        $data = \App\Models\Loans::getReportDamaged($request->query());
        return DataTables::of($data)->addcolumn('goods_code', function($data){
            return $data->Book->code;
        })->addcolumn('Goods_name', function($data){
            return $data->Book->title;
        })->addcolumn('borrower_name', function($data){
            return $data->Borrow->Borrower->name;
        })->make(true);
    }

    public function getReportLost(Request $request)
    {
        $data = \App\Models\Loans::getReportLost($request->query());
        return DataTables::of($data)->addcolumn('goods_code', function($data){
            return $data->Book->code;
        })->addcolumn('goods_name', function($data){
            return $data->Book->title;
        })->addcolumn('borrower_name', function($data){
            return $data->Borrow->Borrower->name;
        })->make(true);
    }
}
