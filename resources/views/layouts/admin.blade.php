<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Admin - EduFun')
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        body {
            background-color: #f5f7fb;
        }

        .sidebar {
            min-height: 100vh;
            background: #212529;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .sidebar .nav-link:hover {
            background: #343a40;
            color: white;
        }

        .sidebar .nav-link.active {
            background: #0d6efd;
            color: white;
        }

        .main-content {
            min-height: 100vh;
        }

    </style>

    @stack('styles')

</head>

<body>

<div class="container-fluid">

    <div class="row">

        @include('components.sidebar', ['role' => 'admin'])


        <main class="col-lg-10 ms-sm-auto px-md-4 main-content">

            <nav class="navbar navbar-light bg-white shadow-sm mb-4">

                <div class="container-fluid">

                    <span class="navbar-brand fw-bold">
                        Dashboard Admin
                    </span>

                    <span>
                        {{ auth()->user()->name }}
                    </span>

                </div>

            </nav>


            @yield('content')

        </main>

    </div>

</div>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

@stack('scripts')

</body>

</html>