@extends('layouts.main')
@section('isi')
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid rounded shadow-lg" alt="Sample image">
            </div>
            <div class="col-md-6">
                <div class="bg-white p-5 rounded shadow-lg">
                    <h2 class="text-center mb-4">Login</h2>
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="username" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror"
                                placeholder="Enter Username" autofocus required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                placeholder="Enter Password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                        <p class="small fw-bold mt-3 text-center">Don't have an account? <a href="/register"
                                class="link-danger">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection