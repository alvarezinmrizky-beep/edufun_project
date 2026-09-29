<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'EduFun')
    </title>

    <meta
        name="description"
        content="EduFun - Platform Pembelajaran Interaktif Berbasis Gamifikasi untuk Siswa Sekolah Dasar"
    >

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Custom CSS -->
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
        }

        .hero-section {
            min-height: 600px;
            display: flex;
            align-items: center;
            background: linear-gradient(
                135deg,
                #eef7ff,
                #ffffff
            );
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            color: #212529;
        }

        .hero-text {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .feature-card {
            border: none;
            border-radius: 18px;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            font-size: 1.6rem;
            background-color: #e7f1ff;
        }

        .footer {
            background-color: #212529;
            color: white;
        }

        @media (max-width: 768px) {

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-section {
                text-align: center;
            }

        }

    </style>

    @stack('styles')

</head>

<body>

    @include('components.navbar')

    @yield('content')

    <footer class="footer mt-5 py-4">

        <div class="container text-center">

            <h5 class="fw-bold">
                EduFun
            </h5>

            <p class="mb-0">
                Belajar, bermain, dan berkembang bersama EduFun.
            </p>

            <small class="text-secondary">
                &copy; {{ date('Y') }} EduFun
            </small>

        </div>

    </footer>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')

</body>

</html>