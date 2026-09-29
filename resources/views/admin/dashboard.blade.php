@extends('layouts.admin')

@section('title', 'Dashboard Admin - EduFun')

@section('content')

<div class="mb-4">

    <h2 class="fw-bold">
        Dashboard Admin
    </h2>

    <p class="text-muted">
        Selamat datang di panel administrator EduFun.
    </p>

</div>


<div class="row g-4">

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Total Siswa
                        </p>

                        <h3 class="fw-bold">
                            0
                        </h3>

                    </div>

                    <i class="bi bi-mortarboard fs-1 text-primary"></i>

                </div>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Total Guru
                        </p>

                        <h3 class="fw-bold">
                            0
                        </h3>

                    </div>

                    <i class="bi bi-person-badge fs-1 text-success"></i>

                </div>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Mata Pelajaran
                        </p>

                        <h3 class="fw-bold">
                            0
                        </h3>

                    </div>

                    <i class="bi bi-book fs-1 text-warning"></i>

                </div>

            </div>

        </div>

    </div>


    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Total Kuis
                        </p>

                        <h3 class="fw-bold">
                            0
                        </h3>

                    </div>

                    <i class="bi bi-question-circle fs-1 text-danger"></i>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection