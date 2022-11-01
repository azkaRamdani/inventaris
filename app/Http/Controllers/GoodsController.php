<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index()
    {
        $title = 'Barang';
        return view('contents.goods.index', compact('title'));
    }

    public function create()
    {
        $title = 'Tambah Barang';
        return view('contents.goods.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required',
            'category' => 'required',

        ]);

        Goods::create($validatedData);
        
        return redirect('/goods')->with('success', 'Data '.$request->name.' berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $title = 'Ubah Data Barang';
        $goods = Goods::where('id', $id)->get();
        return view('contents.goods.edit', compact('title', 'goods'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        Goods::where('id', $request->id)->update($validatedData);
        return redirect('/goods')->with('success', 'Data '.$request->name.' berhasil dirubah!');
    }

    public function delete($id)
    {
        Goods::where('id', $id)->delete();
        return redirect('/goods')->with('success', 'Kategori berhasil dihapus');
    }
}
