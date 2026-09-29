@extends('layouts.siswa')

@section('title', 'Dashboard Siswa - EduFun')

@section('content')

<div class="mb-4">

    <h2 class="fw-bold">
        Halo, {{ auth()->user()->name }}! 👋
    </h2>

    <p class="text-muted">
        Siap belajar hari ini?
    </p>

</div>


<div class="row g-4">

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted mb-1">
                    Total XP
                </p>

                <h3 class="fw-bold text-primary">
                    0 XP
                </h3>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted mb-1">
                    Level
                </p>

                <h3 class="fw-bold text-success">
                    Level 1
                </h3>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted mb-1">
                    Badge
                </p>

                <h3 class="fw-bold text-warning">
                    0
                </h3>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <p class="text-muted mb-1">
                    Kuis Selesai
                </p>

                <h3 class="fw-bold text-danger">
                    0
                </h3>

            </div>

        </div>

    </div>

</div>


<!-- PROGRESS -->

<div class="card border-0 shadow-sm mt-4">

    <div class="card-body">

        <div class="d-flex justify-content-between mb-2">

            <h5 class="fw-bold">
                Progress Belajar
            </h5>

            <span>
                0%
            </span>

        </div>

        <div class="progress" style="height: 10px;">

            <div
                class="progress-bar"
                role="progressbar"
                style="width: 0%;"
            ></div>

        </div>

    </div>

</div>


<!-- MATA PELAJARAN -->

<div class="mt-4">

    <h4 class="fw-bold mb-3">
        Mata Pelajaran
    </h4>


    <div class="row g-4">

        @foreach([
            ['nama' => 'Matematika', 'icon' => 'calculator'],
            ['nama' => 'Bahasa Indonesia', 'icon' => 'book'],
            ['nama' => 'IPA', 'icon' => 'flask'],
            ['nama' => 'IPS', 'icon' => 'globe']
        ] as $subject)

            <div class="col-md-6 col-lg-3">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body text-center p-4">

                        <i
                            class="bi bi-{{ $subject['icon'] }} text-primary"
                            style="font-size: 40px;"
                        ></i>

                        <h5 class="fw-bold mt-3">
                            {{ $subject['nama'] }}
                        </h5>

                        <p class="text-muted">
                            Belum ada progress
                        </p>

                        <button class="btn btn-outline-primary btn-sm">
                            Mulai Belajar
                        </button>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection