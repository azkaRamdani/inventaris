<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $title = 'Laporan';
        return view('contents.reports.index', compact('title'));
    }
}
