@extends('layouts.auth')
@section('content')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registrasi !</h1>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('identifier_number') is-invalid
                                        @enderror" name="identifier_number" placeholder="NIP" required>
                                        @error('identifier_number')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid
                                    @enderror" name="name" placeholder="Nama" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="" selected disabled>Jenis Kelamin</option>
                                        <option value="1">Laki - Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid
                                    @enderror" name="email" placeholder="Email" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                    <div class="form-group">
                                        <select class="form-control @error('origin_field') is-invalid    
                                        @enderror" name="asal bidang" required>
                                            <option value="" selected disabled>Asal Bidang</option>
                                            <option>Tibum</option>
                                            <option>Linmas</option>
                                            <option>GakPerunda</option>
                                            <option>SDA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid
                                        @enderror" name="kata sandi" placeholder="Kata Sandi">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <form class="user" action="/register" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
                                        </div>
                                    </form>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p class="small">Sudah Punya Akun?<a href="/login">Masuk</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection