@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        </div>
        <div class="col-lg-12">
        <div class="card mb-4 mt-2">
            <div class="card-header">
                <h6>Data Barang</h6>
            </div>
            <div class="card-body">
            <form action="/goods/store" method="post">
                @csrf
                
                <label for="inputName">Nama</label>
                <input type="text" class="form-control mb-2" name="name" placeholder="Nama Barang" required>
                
                <label for="inputCategory">Kategori</label>
                <div class="form-group">
                    <select class="form-control @error('origin_field') is-invalid
                    @enderror" name="origin_field" required>
                        <option value="" selected disabled>Kategori</option>
                        <option value="#">Alat Kebersihan</option>
                        <option value="#">Kendaraan</option>
                        <option value="#">Elektronik</option>
                        <option value="#">Interior Ruangan</option>
                    </select>
                </div>
                
                <div class="float-right mt-2">
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>
            </div>  
        </div>
        </div>
    </div>

@endsection