@extends('layouts.app')

@vite('resources/sass/Login.scss')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5 pt-5">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="Tittle text-center mt-5 mb-5" style="font-size: 38px;">
                            <div class="icon py-3">
                                <i class="bi-hexagon-fill me-2" style="color:#0d6efd;"></i>
                            </div>
                            <h2>Employee Data Master</h2>
                        </div>

                        <div class="col-md-8 mx-auto">
                            <hr>
                            <div class="Email py-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="Password py-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <hr>

                            <button class="btn btn-primary mt-3">
                                <span>
                                    <i class="bi bi-box-arrow-in-right"></i> Log In
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
