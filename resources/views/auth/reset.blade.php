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
                                    <h1 class="h4 text-gray-900 mb-4">Atur ulang Kata sandi !</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Kata sandi baru...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Konfirmasi kata sandi">
                                    </div>
                                    <a href="/login" class="btn btn-primary btn-block">
                                        Atur Ulang
                                    </a>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection