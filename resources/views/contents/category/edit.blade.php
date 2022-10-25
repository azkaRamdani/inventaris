@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        </div>
        <div class="col-lg-12">
        <div class="card mb-4 mt-2">
            <div class="card-header">
                <h6>Data Kategori</h6>
            </div>
            <div class="card-body">
                @foreach ($categories as $category)
                    
                <form action="/category/{{ $category->id }}/update" method="post">
                    @csrf
                    <label for="inputName">Nama Kategori</label>
                    <input value="{{ $category->name }}" type="text" class="form-control mb-2" name="name" placeholder="Nama Kategori" required>
                    <div class="float-right mt-2">
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
                @endforeach
            </div>  
        </div>
        </div>
    </div>

@endsection