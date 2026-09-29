@extends('layouts.app')

@section('title', 'Fitur EduFun')

@section('content')

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="text-primary fw-semibold">
                FITUR
            </span>

            <h1 class="fw-bold">
                Fitur Pembelajaran EduFun
            </h1>

            <p class="text-muted">
                Belajar dengan cara yang lebih interaktif.
            </p>

        </div>


        <div class="row g-4">

            @php

                $features = [

                    [
                        'icon' => 'bi-book',
                        'title' => 'Materi Pembelajaran',
                        'description' => 'Materi pembelajaran yang mudah dipahami siswa.'
                    ],

                    [
                        'icon' => 'bi-play-circle',
                        'title' => 'Video Pembelajaran',
                        'description' => 'Video membantu siswa memahami materi dengan lebih menarik.'
                    ],

                    [
                        'icon' => 'bi-pencil-square',
                        'title' => 'Latihan Soal',
                        'description' => 'Siswa dapat mengerjakan latihan untuk menguji pemahaman.'
                    ],

                    [
                        'icon' => 'bi-question-circle',
                        'title' => 'Kuis Interaktif',
                        'description' => 'Kuis dengan perhitungan nilai secara otomatis.'
                    ],

                    [
                        'icon' => 'bi-star',
                        'title' => 'XP dan Level',
                        'description' => 'Siswa memperoleh XP dan dapat meningkatkan level.'
                    ],

                    [
                        'icon' => 'bi-trophy',
                        'title' => 'Badge',
                        'description' => 'Siswa dapat memperoleh badge berdasarkan pencapaian.'
                    ],

                    [
                        'icon' => 'bi-bar-chart',
                        'title' => 'Progress Belajar',
                        'description' => 'Perkembangan belajar dapat dipantau melalui progress.'
                    ],

                    [
                        'icon' => 'bi-person',
                        'title' => 'Profil Siswa',
                        'description' => 'Siswa dapat melihat informasi profil dan pencapaiannya.'
                    ],

                ];

            @endphp


            @foreach ($features as $feature)

                <div class="col-md-6 col-lg-3">

                    <div class="card feature-card shadow-sm h-100">

                        <div class="card-body p-4 text-center">

                            <div class="feature-icon mx-auto mb-3">

                                <i class="bi {{ $feature['icon'] }} text-primary"></i>

                            </div>

                            <h5 class="fw-bold">
                                {{ $feature['title'] }}
                            </h5>

                            <p class="text-muted mb-0">
                                {{ $feature['description'] }}
                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection