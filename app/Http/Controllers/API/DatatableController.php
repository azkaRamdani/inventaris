<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        })->addcolumn('goods_name', function ($data){
            return $data->Goods->name;
        })->make(true);
    }
}
