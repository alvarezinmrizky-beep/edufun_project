@extends('layouts.app')

@section('title', 'Dashboard Admin - EduFun')

@section('content')

<div class="mb-4">

    <h2>
        Dashboard Admin
    </h2>

    <p class="text-muted">
        Selamat datang di halaman administrator EduFun.
    </p>

</div>


<div class="row">

    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    Manajemen User
                </h5>

                <p>
                    Kelola akun siswa, guru, dan administrator.
                </p>

            </div>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    Mata Pelajaran
                </h5>

                <p>
                    Kelola mata pelajaran EduFun.
                </p>

            </div>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    Laporan
                </h5>

                <p>
                    Lihat perkembangan pembelajaran siswa.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection