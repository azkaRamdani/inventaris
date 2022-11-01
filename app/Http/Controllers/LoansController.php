<?php

namespace App\Http\Controllers;

use App\Models\Loans;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function index()
    {
        $title = 'Peminjaman';
        return view('contents.loans.index', compact('title'));
    }

    public function create()
    {
        $title = 'Tambah Peminjam';
        return view('contents.loans.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'officer_name' => 'required',
            'borrower_name' => 'required',
            'goods' => 'required',
        ]);
    }

    public function edit($id)
    {
        $title = 'Ubah Data';
        $loans = Loans::where('id', $id)->get();
        return view('contents.loans.edit', compact('title', 'loans'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'officer_name' => 'required',
            'borrower_name' => 'required',
            'goods' => 'required'
        ]);
        Loans::where('id', $request->id)->update($validatedData);
        return redirect('/loans')->with('success', 'Data '.$request->name.' berhasil dirubah!');
    }

    public function delete($id)
    {
        Loans::where('id', $id)->delete();
        return redirect('/loans')->with('success', 'Data berhasil dihapus');
    }
}
