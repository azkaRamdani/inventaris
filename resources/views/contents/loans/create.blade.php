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
            <form action="/loans/store" method="post">
                @csrf
                <label for="inputOfficer">Nama Petugas</label>
                <input type="text" class="form-control mb-2" name="name" placeholder="Nama Petugas" required>
                <div class="float-right mt-2">
            </div>
            <div>
                <label for="inputLoans">Nama Peminjam</label>
                <input type="text" class="form-control mb-2" name="name" placeholder="Nama Peminjam" required>
            <div class="float-right mt-2">
            </div>
            <div>
                <label for="inputGoods">Nama Barang</label>
                <input type="text" class="form-control mb-2" name="name" placeholder="Nama Barang" required>
            <div class="float-right mt-2">
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
            </form>
            </div>  
        </div>
        </div>
    </div>

@endsection