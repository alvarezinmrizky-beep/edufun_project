<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">

    <div class="container">

        <a
            class="navbar-brand text-primary"
            href="{{ url('/') }}"
        >
            <i class="bi bi-stars"></i>
            EduFun
        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarEduFun"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="navbarEduFun"
        >

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ url('/') }}"
                    >
                        Beranda
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ url('/tentang') }}"
                    >
                        Tentang
                    </a>

                </li>


                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ url('/fitur') }}"
                    >
                        Fitur
                    </a>

                </li>


                @guest

                    <li class="nav-item ms-lg-2">

                        <a
                            href="{{ route('login') }}"
                            class="btn btn-primary px-4"
                        >
                            <i class="bi bi-box-arrow-in-right"></i>
                            Masuk
                        </a>

                    </li>

                @else

                    <li class="nav-item ms-lg-2">

                        @if(auth()->user()->role === 'admin')

                            <a
                                href="{{ route('admin.dashboard') }}"
                                class="btn btn-primary"
                            >
                                Dashboard
                            </a>

                        @elseif(auth()->user()->role === 'guru')

                            <a
                                href="{{ route('guru.dashboard') }}"
                                class="btn btn-primary"
                            >
                                Dashboard
                            </a>

                        @elseif(auth()->user()->role === 'siswa')

                            <a
                                href="{{ route('siswa.dashboard') }}"
                                class="btn btn-primary"
                            >
                                Dashboard
                            </a>

                        @endif

                    </li>

                @endguest

            </ul>

        </div>

    </div>

</nav>