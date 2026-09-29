@extends('layouts.app')

@section('title', 'Login - EduFun')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-5">

        <div class="card shadow">

            <div class="card-body p-4">

                <h3 class="text-center mb-4">
                    Login EduFun
                </h3>

                @if ($errors->any())

                    <div class="alert alert-danger">

                        @foreach ($errors->all() as $error)

                            <div>
                                {{ $error }}
                            </div>

                        @endforeach

                    </div>

                @endif


                <form action="{{ url('/login') }}" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            required
                        >

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            required
                        >

                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                    >
                        Login
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection