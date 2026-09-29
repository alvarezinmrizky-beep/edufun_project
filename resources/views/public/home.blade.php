@extends('layouts.app')

@section('title', 'EduFun - Belajar Jadi Lebih Seru')

@section('content')

<!-- HERO -->

<section class="hero-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    Platform Belajar Interaktif
                </span>

                <h1 class="hero-title">

                    Belajar Jadi Lebih Seru
                    <span class="text-primary">
                        Bersama EduFun!
                    </span>

                </h1>

                <p class="hero-text mt-3">

                    Belajar, bermain, kumpulkan poin,
                    dan raih pencapaianmu!

                </p>


                <div class="mt-4">

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-primary btn-lg px-4 me-2"
                    >

                        <i class="bi bi-rocket-takeoff"></i>

                        Mulai Belajar

                    </a>


                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline-primary btn-lg px-4"
                    >

                        Masuk

                    </a>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="text-center">

                    <div class="bg-white shadow rounded-4 p-5">

                        <i
                            class="bi bi-mortarboard-fill text-primary"
                            style="font-size: 100px;"
                        ></i>

                        <h3 class="fw-bold mt-4">
                            Yuk Belajar!
                        </h3>

                        <p class="text-muted">
                            Temukan pengalaman belajar
                            yang menyenangkan bersama EduFun.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FITUR -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-primary fw-semibold">
                FITUR EDUFUN
            </span>

            <h2 class="fw-bold mt-2">
                Belajar Tidak Harus Membosankan
            </h2>

            <p class="text-muted">
                EduFun membantu siswa belajar melalui
                pengalaman yang lebih interaktif.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-6 col-lg-3">

                <div class="card feature-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mx-auto mb-3">

                            <i class="bi bi-book text-primary"></i>

                        </div>

                        <h5 class="fw-bold">
                            Materi Belajar
                        </h5>

                        <p class="text-muted">
                            Pelajari materi dengan
                            tampilan yang mudah dipahami.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="card feature-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mx-auto mb-3">

                            <i class="bi bi-play-circle text-success"></i>

                        </div>

                        <h5 class="fw-bold">
                            Video
                        </h5>

                        <p class="text-muted">
                            Gunakan video pembelajaran
                            untuk memahami materi.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="card feature-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mx-auto mb-3">

                            <i class="bi bi-question-circle text-warning"></i>

                        </div>

                        <h5 class="fw-bold">
                            Kuis Interaktif
                        </h5>

                        <p class="text-muted">
                            Uji pemahaman melalui
                            kuis yang menyenangkan.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-6 col-lg-3">

                <div class="card feature-card shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <div class="feature-icon mx-auto mb-3">

                            <i class="bi bi-trophy text-danger"></i>

                        </div>

                        <h5 class="fw-bold">
                            Poin & Badge
                        </h5>

                        <p class="text-muted">
                            Kumpulkan XP dan raih
                            berbagai pencapaian.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- CARA KERJA -->

<section class="py-5 bg-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Cara Kerja EduFun
            </h2>

            <p class="text-muted">
                Belajar dengan langkah sederhana.
            </p>

        </div>


        <div class="row g-4">

            <div class="col-md-4 text-center">

                <div class="display-5 text-primary mb-3">
                    <i class="bi bi-person-plus"></i>
                </div>

                <h5 class="fw-bold">
                    1. Masuk
                </h5>

                <p class="text-muted">
                    Login menggunakan akun yang telah
                    diberikan.
                </p>

            </div>


            <div class="col-md-4 text-center">

                <div class="display-5 text-success mb-3">
                    <i class="bi bi-book-half"></i>
                </div>

                <h5 class="fw-bold">
                    2. Belajar
                </h5>

                <p class="text-muted">
                    Pelajari materi dan kerjakan kuis.
                </p>

            </div>


            <div class="col-md-4 text-center">

                <div class="display-5 text-warning mb-3">
                    <i class="bi bi-award"></i>
                </div>

                <h5 class="fw-bold">
                    3. Raih Pencapaian
                </h5>

                <p class="text-muted">
                    Dapatkan XP, level, dan badge.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection