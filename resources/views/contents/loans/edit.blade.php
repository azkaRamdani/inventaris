@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        </div>
        <div class="col-lg-12">
        <div class="card mb-4 mt-2">
            <div class="card-header">
                <h6>Data Peminjaman</h6>
            </div>
            <div class="card-body">
                @foreach ($loans as $loans)
                    
                <form action="/loans/{{ $loans->id }}/update" method="post">
                    @csrf
                    <label for="inputName">Nama Petugas</label>
                    <input value="{{ $loans->name }}" type="text" class="form-control mb-2" name="name" placeholder="Nama Peminjam" required>
                    <div class="float-right mt-2">
                    </div>

                    <label for="inputName">Nama Peminjam</label>
                    <input value="{{ $loans->officer_name }}" type="text" class="form-control mb-2" name="name" placeholder="Nama Petugas" required>
                    <div class="float-right mt-2">
                    </div>

                    <label for="inputName">Nama Barang</label>
                    <input value="{{ $loans->name }}" type="text" class="form-control mb-2" name="name" placeholder="Nama Peminjam" required>
                    
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