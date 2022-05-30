@extends('layouts.secondary')
@section('container')
    <!-- cover -->
    <div class="container-fluid banner vw-100 vh-100">
        <div class="container position-relative p-lg-5">
            <div class="row justify-content-end">
                <div class="col-md-4">
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

                    <div class="card">
                        <div class="card-body">
                            <main class="form-signin w-100 m-auto text-dark">
                                <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror" id="username"
                                            placeholder="Username" autofocus required value="{{ old('username') }}">
                                        <label for="name">Username</label>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Password" required>
                                        <label for="password">Password</label>
                                    </div>
                                    <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
                                </form>
                                <div class="text-center mt-3">
                                    <small>Don't have an account?<br><a href="/register">create account</a></small>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir cover -->
@endsection
