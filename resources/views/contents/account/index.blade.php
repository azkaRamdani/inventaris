@extends('layouts.main')

    @section('script')
    @endsection

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/account">Akun</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
        </ol>
    </div>
        <!-- Account page navigation-->
        <form action="/account" method="POST" enctype="multipart/form-data">
            @csrf
            @if (session('Berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('Berhasil') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Foto Profil</p></div>
                    <div class="card-body text-center">
                        {{-- <!-- Profile picture image-->
                        @if (auth()->user()->image == null)
                            <img class="img-account-profile rounded-circle mb-4 img-preview" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="170px" height="170px">
                        @else
                            <img class="img-account-profile rounded-circle mb-4 img-preview" src="{{ asset('img/profile-images/' . auth()->user()->image) }}" alt="{{ auth()->user()->image }}" width="170px" height="170px">
                        @endif
                        <div class="small font-italic text-muted mb-4">JPG atau PNG ukuran kurang dari 5 MB</div> --}}
                    <!-- Profile picture upload button-->
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" onchange="previewImage()">
                            <label class="custom-file-label text-left" for="image">Unggah Foto Baru</label>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h5 text-gray-800">Data Akun</p></div>
                    <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputNip">NIP</label>
                                {{-- <input class="form-control" id="inputNip" type="number" name="identifier_number" placeholder="NIP Anggota" value="{{ auth()->user()->identifier_number }}"> --}}
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputName">Nama Lengkap</label>
                                    {{-- <input class="form-control" id="inputName" type="text" name="name" placeholder="Nama Lengkap Anggota" value="{{ auth()->user()->name }}"> --}}
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="selectGender">Jenis Kelamin</label>
                                    <select name="gender" id="selectGender" class="form-control">
                                        {{-- @if (auth()->user()->gender == 1)
                                            <option value="{{ auth()->user()->gender }}">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        @else
                                            <option value="{{ auth()->user()->gender }}">Perempuan</option>
                                            <option value="1">Laki - Laki</option>
                                        @endif --}}
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                {{-- <div class="col-md-6">
                                    <label class="small mb-1" for="inputEmail">Alamat Email</label>
                                    <input class="form-control" id="inputEmail" type="email" name="email" placeholder="Alamat Email Anggota" value="{{ auth()->user()->email }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">No Telepon</label>
                                    <input class="form-control" id="inputPhone" type="number" name="phone" placeholder="No Telepon Anggota" value="{{ auth()->user()->phone }}">
                                </div>
                            </div> --}}
                            <!-- Form Row        -->
                            {{-- <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <!-- Form Group (location)-->
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Alamat</label>
                                    {{-- <textarea name="address" id="" cols="20" rows="10" placeholder="Alamat Anggota" class="form-control">{{ auth()->user()->address }}</textarea> --}}
                                </div>
                                {{-- <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="province">Provinsi</label>
                                    <select class="form-control" id="province" required>
                                        @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                        @foreach ($prov as $p)
                                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="cities">Kabupaten / Kota</label>
                                    <select class="form-control" name="" id="cities" required>
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="districts">Kecamatan</label>
                                    <select class="form-control" id="districts" required>
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="small mb-1" for="sub_districts">Desa</label>
                                    <select class="form-control" name="sub_district_id" id="sub_districts" required>
                                        <option value="{{ auth()->user()->sub_district_id }}">{{ auth()->user()->SubDistrict->name }}</option>
                                    </select>
                                </div> --}}
                            </div>
                            <!-- Form Group (email address)-->
                            <!-- Save changes button-->
                            <div class="col-lg-12">
                                <div class="text-right">
                                    <a href="/dashboard" class="btn btn-outline-secondary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-outline-primary" type="button">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@include('components.scripts.selectchange')
@endsection