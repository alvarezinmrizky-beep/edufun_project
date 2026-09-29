@extends('layouts.app')

@section('title', 'Login - EduFun')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5 col-lg-4">

                <div class="text-center mb-4">

                    <div class="text-primary mb-2">

                        <i
                            class="bi bi-stars"
                            style="font-size: 45px;"
                        ></i>

                    </div>

                    <h2 class="fw-bold">
                        Selamat Datang!
                    </h2>

                    <p class="text-muted">
                        Masuk ke akun EduFun kamu.
                    </p>

                </div>


                <div class="card border-0 shadow rounded-4">

                    <div class="card-body p-4">


                        @if ($errors->any())

                            <div class="alert alert-danger">

                                <strong>
                                    Login gagal
                                </strong>

                                <ul class="mb-0 mt-2">

                                    @foreach ($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <form
                            action="{{ route('login.process') }}"
                            method="POST"
                        >

                            @csrf


                            <div class="mb-3">

                                <label class="form-label fw-semibold">
                                    Email
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Masukkan email"
                                        value="{{ old('email') }}"
                                        required
                                    >

                                </div>

                            </div>


                            <div class="mb-4">

                                <label class="form-label fw-semibold">
                                    Password
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>

                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="Masukkan password"
                                        required
                                    >

                                </div>

                            </div>


                            <button
                                type="submit"
                                class="btn btn-primary w-100 py-2"
                            >

                                <i class="bi bi-box-arrow-in-right"></i>

                                Masuk

                            </button>

                        </form>


                        <div class="text-center mt-4">

                            <a
                                href="{{ route('home') }}"
                                class="text-decoration-none"
                            >
                                ← Kembali ke Beranda
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection