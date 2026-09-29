@php

    $dashboardRoute = match ($role) {

        'admin' => 'admin.dashboard',
        'guru' => 'guru.dashboard',
        'siswa' => 'siswa.dashboard',

    };

@endphp


<aside class="col-lg-2 d-none d-lg-block sidebar p-3">

    <div class="text-white text-center mb-4">

        <h4 class="fw-bold">
            <i class="bi bi-stars"></i>
            EduFun
        </h4>

        <small class="text-secondary">
            {{ ucfirst($role) }}
        </small>

    </div>


    <nav class="nav flex-column">


        <a
            href="{{ route($dashboardRoute) }}"
            class="nav-link"
        >

            <i class="bi bi-speedometer2 me-2"></i>

            Dashboard

        </a>


        @if($role === 'admin')

            <a href="#" class="nav-link">

                <i class="bi bi-people me-2"></i>

                Pengguna

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-person-badge me-2"></i>

                Guru

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-mortarboard me-2"></i>

                Siswa

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-book me-2"></i>

                Mata Pelajaran

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-journal-text me-2"></i>

                Materi

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-question-circle me-2"></i>

                Kuis

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-trophy me-2"></i>

                Badge

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-bar-chart me-2"></i>

                Laporan

            </a>

        @endif


        @if($role === 'guru')

            <a href="#" class="nav-link">

                <i class="bi bi-book me-2"></i>

                Mata Pelajaran

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-journal-text me-2"></i>

                Materi

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-question-circle me-2"></i>

                Kuis

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-list-check me-2"></i>

                Soal

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-bar-chart me-2"></i>

                Hasil Siswa

            </a>

        @endif


        @if($role === 'siswa')

            <a href="#" class="nav-link">

                <i class="bi bi-book me-2"></i>

                Mata Pelajaran

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-journal-text me-2"></i>

                Materi Saya

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-question-circle me-2"></i>

                Kuis

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-bar-chart me-2"></i>

                Progress

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-trophy me-2"></i>

                Badge

            </a>


            <a href="#" class="nav-link">

                <i class="bi bi-person me-2"></i>

                Profil

            </a>

        @endif


        <hr class="text-secondary">


        <form
            action="{{ route('logout') }}"
            method="POST"
        >

            @csrf

            <button
                type="submit"
                class="nav-link border-0 bg-transparent w-100 text-start"
            >

                <i class="bi bi-box-arrow-right me-2"></i>

                Logout

            </button>

        </form>

    </nav>

</aside>