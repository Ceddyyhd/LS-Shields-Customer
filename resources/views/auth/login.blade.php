@extends('layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="col-xl-12">
        <div class="card auth-card">
            <div class="card-body p-0">
                <div class="row align-items-center g-0">
                    <div
                        class="col-lg-6 d-none d-lg-inline-block border-end"
                    >
                        <div class="auth-page-sidebar">
                            <img
                                src="/images/sign-in.svg"
                                alt="auth"
                                class="img-fluid"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div
                                class="mx-auto mb-4 text-center auth-logo"
                            >
                                <a
                                    href="{{ route('any', 'home') }}"
                                    class="logo-dark"
                                >
                                    <img
                                        src="/images/logo-sm.png"
                                        height="30"
                                        class="me-1"
                                        alt="logo sm"
                                    />
                                    <img
                                        src="/images/logo-dark.png"
                                        height="24"
                                        alt="logo dark"
                                    />
                                </a>

                                <a
                                    href="{{ route('any', 'home') }}"
                                    class="logo-light"
                                >
                                    <img
                                        src="/images/logo-sm.png"
                                        height="30"
                                        class="me-1"
                                        alt="logo sm"
                                    />
                                    <img
                                        src="/images/logo-light.png"
                                        height="24"
                                        alt="logo light"
                                    />
                                </a>
                            </div>
                            <h2
                                class="fw-bold text-center fs-18"
                            >
                                Sign In (Kunden Bereich)
                            </h2>
                            <p
                                class="text-muted text-center mt-1 mb-4"
                            >
                                Enter your email address and
                                password to access admin panel.
                            </p>

                            <div
                                class="row justify-content-center"
                            >
                                <div class="col-12 col-md-8">
                                    <form method="POST" action="{{ route('login') }}"
                                          class="authentication-form">
                                        @csrf
                                        @if (sizeof($errors) > 0)
                                            @foreach ($errors->all() as $error)
                                                <p class="text-danger mb-3">{{ $error }}</p>
                                            @endforeach
                                        @endif

                                        <div class="mb-3">
                                            <label
                                                class="form-label"
                                                for="example-email"
                                            >Email</label>
                                            <input
                                                type="email"
                                                id="example-email"
                                                name="email"
                                                class="form-control"
                                                placeholder="Enter your email"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <a
                                                href="{{ route('password.request') }}"
                                                class="float-end text-muted text-unline-dashed ms-1"
                                            >Reset
                                                password</a
                                            >
                                            <label
                                                class="form-label"
                                                for="example-password"
                                            >Password</label
                                            >
                                            <input
                                                type="password"
                                                id="example-password"
                                                name="password"
                                                class="form-control"
                                                placeholder="Enter your password"
                                            />
                                        </div>
                                        <div class="mb-3">
                                            <div
                                                class="form-check"
                                            >
                                                <input
                                                    type="checkbox"
                                                    class="form-check-input"
                                                    id="checkbox-signin"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="checkbox-signin"
                                                >Remember
                                                    me</label
                                                >
                                            </div>
                                        </div>

                                        <div class="mb-4 text-center d-grid">
                                        <button class="btn btn-primary" type="submit">
                                            Sign In
                                        </button>
                                    </div>
                                    </form>

                                    <div class="text-center">
                                        <a href="http://intern.ls-shields.eu/" class="btn btn-secondary btn-sm" style="width: auto; min-width: 120px;">
                                            Mitarbeiter Bereich
                                        </a>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <p class="text-white mb-0 text-center">
            Don't have an account?
            <a
                href="{{ route('second', [ 'auth' , 'register']) }}"
                class="text-white fw-bold ms-1"
            >Sign Up</a>
        </p>
    </div>
@endsection
