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
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Alamat Email...">
                                    </div>
                                    <div class="form-group">
                                        <select name="asalBidang" id="" class="form-control">
                                            <option>Asal Bidang</option>
                                            <option>Tibum</option>
                                            <option>Linmas</option>
                                            <option>GakPerunda</option>
                                            <option>SDA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            id="exampleInputPassword" placeholder="Kata Sandi">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <a href="/login" class="btn btn-primary btn-block">
                                        Registrasi
                                    </a>
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