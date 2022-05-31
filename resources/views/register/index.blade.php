@extends('layouts.secondary')
@section('container')
    <!-- cover -->
    <div class="container-fluid banner vw-100 vh-100">
        <div class="container position-relative p-lg-5">
            <div class="row justify-content-end">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <main class="form-register w-100 m-auto text-dark">
                                <h1 class="h3 mb-2 fw-normal text-center">Create Account</h1>
                                <form action="/register" method="post">
                                    @csrf
                                    <input type="text" name="role" class="form-control" id="role" value="user" hidden>
                                    <div class="form-floating mb-2">
                                        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}" autofocus>
                                        <label for="name">Username</label>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                                        <label for="password">Password</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="password" name="confirm-password" class="form-control @error('confirm-password')is-invalid @enderror" id="confirm-password" placeholder="ConfirmPassword" required>
                                        <label for="confirm-password">Confirm Password</label>
                                        @error('confirm-password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-1">
                                        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                        <label for="name">Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="w-100 btn btn-lg btn-warning" type="submit">Create</button>
                                </form>
                                    <div class="text-center mt-2">
                                        <small>Already registered? <a href="/login">Login</a></small>
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
