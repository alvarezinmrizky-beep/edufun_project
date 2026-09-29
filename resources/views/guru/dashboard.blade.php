@extends('layouts.app')

@section('title', 'Dashboard Guru - EduFun')

@section('content')

<div class="mb-4">

    <h2>
        Dashboard Guru
    </h2>

    <p class="text-muted">
        Selamat datang, {{ auth()->user()->name }}.
    </p>

</div>


<div class="row">

    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    Materi
                </h5>

                <p>
                    Kelola materi pembelajaran siswa.
                </p>

            </div>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    Kuis
                </h5>

                <p>
                    Kelola kuis dan soal pembelajaran.
                </p>

            </div>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    Progress Siswa
                </h5>

                <p>
                    Pantau perkembangan belajar siswa.
                </p>

            </div>

        </div>

    </div>

</div>

@endsection