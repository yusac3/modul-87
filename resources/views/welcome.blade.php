@extends('layouts.A')

@section('no-navbar')
    <!-- This section indicates that the navbar should not be displayed -->
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center bg-primary" style="margin-top: 75px">
        <div class="card p-4 shadow">
            <div class="card-body text-center">
                <i class="bi bi-hexagon-fill text-primary" style="font-size: 50px"></i>
                <h1>Employee Data Master</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <hr>
                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Enter Your Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <hr>
                    <div class="d-grid py-3">
                        <button type="submit" class="btn btn-primary w-100 py-2">
                            <i class="bi bi-box-arrow-in-right me-2"></i>{{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
