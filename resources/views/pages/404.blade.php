@extends('layouts.auth', ['title' => 'Page Not Found - 404'])

@section('content')

<div class="col-xl-12">
    <div class="card auth-card">
        <div class="card-body p-0">
            <div class="row align-items-center g-0">
                <div class="col-lg-6 d-none d-lg-inline-block border-end">
                    <div class="auth-page-sidebar">
                        <img src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif" alt="auth" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <div class="mx-auto mb-4 text-center">
                            <div class="mx-auto text-center auth-logo">
                                <a href="{{ route('any', 'home')}}" class="logo-dark">
                                    <img src="/images/logo-sm.png" height="30" class="me-1" alt="logo sm" />
                                    <img src="/images/logo-dark.png" height="24" alt="logo dark" />
                                </a>

                                <a href="{{ route('any', 'home')}}" class="logo-light">
                                    <img src="/images/logo-sm.png" height="30" class="me-1" alt="logo sm" />
                                    <img src="/images/logo-light.png" height="24" alt="logo light" />
                                </a>
                            </div>

                            <h1 class="mt-5 mb-3 fw-bold fs-60">
                                404
                            </h1>
                            <h2 class="fs-22 lh-base">
                                Page Not Found !
                            </h2>
                            <p class="text-muted mt-1 mb-4">
                                The page you're trying to
                                reach seems to have gone
                                <br />
                                missing in the digital
                                wilderness.
                            </p>

                            <div class="text-center">
                                <a href="{{ route('any', 'home') }}" class="btn btn-success">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end card-body -->
    </div>
    <!-- end card -->
</div>

@endsection