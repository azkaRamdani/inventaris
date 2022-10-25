<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Kategori';
        return view('contents.category.index', compact('title'));
    }

    public function create()
    {
        $title = 'Tambah Kategori';
        return view('contents.category.create', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        Category::create($validatedData);
        return redirect('/category')->with('success', 'Data '.$request->name.' berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $title = 'Ubah Kategori';
        $categories = Category::where('id', $id)->get();
        return view('contents.category.edit', compact('title', 'categories'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        Category::where('id', $request->id)->update($validatedData);
        return redirect('/category')->with('success', 'Data '.$request->name.' berhasil dirubah!');
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect('/category')->with('success', 'Kategori berhasil dihapus');
    }
}
