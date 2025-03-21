@extends('layouts.vertical', ['title' => 'Dashboard', 'subTitle' => 'Settings'])
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Einstellungen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Einstellungen</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Benutzereinstellungen</h3>
            </div>
            
            <form id="settingsForm" method="POST" action="{{ route('customer.settings.update') }}">
            @csrf
                @method('PUT')
                
                <div class="card-body">
    <!-- Personal Information -->
    <h5 class="mb-4">Persönliche Informationen</h5>
    <div class="form-group">
        <label for="name">Firmen Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" 
               id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
    <label for="umail">Email Adresse</label>
    <div class="input-group">
        <input type="email" class="form-control" 
               id="umail" name="umail" 
               value="{{ auth()->user()->email }}" 
               disabled>
        <span class="input-group-text text-muted">
            Bitte bei LS-Shields melden um dies zu ändern
        </span>
    </div>
</div>

    <!-- Company Information -->
    <h5 class="mt-4 mb-4">Firmeninformationen</h5>
    <div class="form-group">
        <label for="nummer">Kundennummer</label>
        <input type="text" class="form-control @error('nummer') is-invalid @enderror" 
               id="nummer" name="nummer" value="{{ old('nummer', auth()->user()->nummer) }}" required>
        @error('nummer')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="kontonummer">Kontonummer</label>
        <input type="text" class="form-control @error('kontonummer') is-invalid @enderror" 
               id="kontonummer" name="kontonummer" value="{{ old('kontonummer', auth()->user()->kontonummer) }}" required>
        @error('kontonummer')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
    <label for="kontakt_name">Name Ansprechpartner</label>
    <input type="text" class="form-control @error('kontakt_name') is-invalid @enderror" 
           id="kontakt_name" name="kontakt_name" value="{{ old('kontakt_name', auth()->user()->kontakt_name) }}" required>
    @error('kontakt_name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="kontakt_nummer">Ansprechpartner Nummer</label>
    <input type="text" class="form-control @error('kontakt_nummer') is-invalid @enderror" 
           id="kontakt_nummer" name="kontakt_nummer" value="{{ old('kontakt_nummer', auth()->user()->kontakt_nummer) }}" required>
    @error('kontakt_nummer')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

    <!-- Address Information -->
    <h5 class="mt-4 mb-4">Adresse</h5>
    <div class="form-group">
        <label for="street">Straße</label>
        <input type="text" class="form-control @error('street') is-invalid @enderror" 
               id="street" name="street" value="{{ old('street', auth()->user()->street) }}" required>
        @error('street')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="plz">PLZ</label>
        <input type="text" class="form-control @error('plz') is-invalid @enderror" 
               id="plz" name="plz" value="{{ old('plz', auth()->user()->plz) }}" required>
        @error('plz')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="city">Stadt</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" 
               id="city" name="city" value="{{ old('city', auth()->user()->city) }}" required>
        @error('city')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password Reset -->
    <h5 class="mt-4 mb-4">Passwort ändern</h5>
    <div class="form-group">
        <label for="current_password">Aktuelles Passwort</label>
        <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
               id="current_password" name="current_password">
        @error('current_password')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Neues Passwort</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" 
               id="password" name="password">
        @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Passwort bestätigen</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
               id="password_confirmation" name="password_confirmation">
        @error('password_confirmation')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Änderungen speichern</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#settingsForm').submit(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            type: 'PUT',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    window.location.reload();
                }
            },
            error: function(xhr) {
                console.error('Error:', xhr.responseText);
            }
        });
        return false;
    });
});
</script>
@endsection