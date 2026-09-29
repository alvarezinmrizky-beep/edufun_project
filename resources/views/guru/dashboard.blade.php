@extends('layouts.guru')

@section('title', 'Dashboard Guru - EduFun')

@section('content')

<div class="mb-4">

    <h2 class="fw-bold">
        Dashboard Guru
    </h2>

    <p class="text-muted">
        Selamat datang, {{ auth()->user()->name }}.
    </p>

</div>


<div class="row g-4">

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted">
                    Jumlah Siswa
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted">
                    Mata Pelajaran
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted">
                    Materi
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted">
                    Kuis
                </p>

                <h3 class="fw-bold">
                    0
                </h3>

            </div>

        </div>

    </div>

</div>

@endsection