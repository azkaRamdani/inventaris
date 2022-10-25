<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function index()
    {
        $title = 'Peminjaman';
        return view('contents.loans.index', compact('title'));
    }
}
