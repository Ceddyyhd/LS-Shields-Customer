@extends('layouts.auth', ['title' => 'Sign Up'])

@section('content')

<div class="col-xl-12">
    <div class="card auth-card">
        <div class="card-body p-0">
            <div class="row align-items-center g-0">
                <div class="col-lg-6 d-none d-lg-inline-block border-end">
                    <div class="auth-page-sidebar">
                        <img src="/images/sign-in.svg" alt="auth" class="img-fluid" />
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="p-4">
                        <div class="mx-auto mb-4 text-center auth-logo">
                            <a href="{{ route('any', 'home')}}" class="logo-dark">
                                <img src="/images/logo-sm.png" height="30" class="me-1" alt="logo sm" />
                                <img src="/images/logo-dark.png" height="24" alt="logo dark" />
                            </a>

                            <a href="{{ route('any', 'home')}}" class="logo-light">
                                <img src="/images/logo-sm.png" height="30" class="me-1" alt="logo sm" />
                                <img src="/images/logo-light.png" height="24" alt="logo light" />
                            </a>
                        </div>

                        <h2 class="fw-bold text-center fs-18">
                            Sign Up
                        </h2>
                        <p class="text-muted text-center mt-1 mb-4">
                            New to our platform? Sign up
                            now! It only takes a minute.
                        </p>

                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                            <form method="POST" action="{{ route('register') }}" class="authentication-form">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="invitation_code">Invitation Code</label>
        <input type="text" 
               id="invitation_code" 
               name="invitation_code" 
               class="form-control @error('invitation_code') is-invalid @enderror" 
               placeholder="Enter invitation code" 
               required />
        @error('invitation_code')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input type="text" 
               id="name" 
               name="name" 
               class="form-control @error('name') is-invalid @enderror" 
               placeholder="Enter your name" 
               required />
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input type="email" 
               id="email" 
               name="email" 
               class="form-control @error('email') is-invalid @enderror" 
               placeholder="Enter your email" 
               required />
    </div>
    <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input type="password" 
               id="password" 
               name="password" 
               class="form-control @error('password') is-invalid @enderror" 
               placeholder="Enter your password" 
               required />
    </div>
    <div class="mb-3">
        <label class="form-label" for="password_confirmation">Confirm Password</label>
        <input type="password" 
               id="password_confirmation" 
               name="password_confirmation" 
               class="form-control" 
               placeholder="Confirm your password" 
               required />
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input type="checkbox" 
                   class="form-check-input" 
                   id="terms" 
                   name="terms" 
                   required />
            <label class="form-check-label" for="terms">
                I accept Terms and Conditions
            </label>
        </div>
    </div>
    <div class="mb-1 text-center d-grid">
        <button class="btn btn-primary" type="submit">
            Sign Up
        </button>
    </div>
</form>
                                
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end card-body -->
    </div>
    <!-- end card -->

    <p class="text-white mb-0 text-center">
        I already have an account
        <a href="{{ route('second', ['auth', 'login-2'])}}" class="text-white fw-bold ms-1">Sign In</a>
    </p>
</div>

@endsection
