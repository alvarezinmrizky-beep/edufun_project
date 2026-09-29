@extends('layouts.app')

@section('title', 'Dashboard Siswa - EduFun')

@section('content')

<div class="mb-4">

    <h2>
        Halo, {{ auth()->user()->name }}!
    </h2>

    <p class="text-muted">
        Selamat datang di EduFun. Yuk mulai belajar!
    </p>

</div>


<div class="row">

    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    📚 Materi Belajar
                </h5>

                <p>
                    Pelajari materi pembelajaran yang tersedia.
                </p>

                <button class="btn btn-primary">
                    Mulai Belajar
                </button>

            </div>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    📝 Kuis
                </h5>

                <p>
                    Kerjakan kuis untuk menguji pemahamanmu.
                </p>

                <button class="btn btn-success">
                    Mulai Kuis
                </button>

            </div>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card shadow-sm">

            <div class="card-body">

                <h5>
                    🏆 Prestasi
                </h5>

                <p>
                    Lihat poin dan badge yang telah diperoleh.
                </p>

                <button class="btn btn-warning">
                    Lihat Prestasi
                </button>

            </div>

        </div>

    </div>

</div>

@endsection