@extends('landingpage.layouts.app')

@section('content')
<section class="application_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Bewerbung</h2>
            <p>Werden Sie Teil unseres Teams</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('application.store') }}" method="POST" class="application-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Vorname</label>
                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" required>
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Nachname</label>
                            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" required>
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Geburtsdatum</label>
                        <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" required>
                        @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" required></textarea>
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Welche Führerscheine haben sie?</label>
                        <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" required>
                        @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Welche Berufserfahrung haben sie?</label>
                        <textarea name="experience" class="form-control @error('experience') is-invalid @enderror" rows="4" required></textarea>
                        @error('experience')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Was Motiviert sie?</label>
                        <textarea name="motivation" class="form-control @error('motivation') is-invalid @enderror" rows="4" required></textarea>
                        @error('motivation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ $questions['application_question_question1'] ?? 'Wie sind sie auf LS-Shields aufmerksam geworden?' }}</label>
                        <textarea name="question1" class="form-control @error('question1') is-invalid @enderror" rows="4" required></textarea>
                        @error('question1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ $questions['application_question_question2'] ?? 'Wieso genau LS-Shields und nicht ein anderes Unternehmen?' }}</label>
                        <textarea name="question2" class="form-control @error('question2') is-invalid @enderror" rows="4" required></textarea>
                        @error('question2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ $questions['application_question_question3'] ?? 'Was erwarten sie von uns?' }}</label>
                        <textarea name="question3" class="form-control @error('question3') is-invalid @enderror" rows="4" required></textarea>
                        @error('question3')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Bewerbung absenden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
.application_section {
    padding: 90px 0;
    background-color: #f8f9fa;
}

.application-form {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: 600;
    margin-bottom: 5px;
}

.btn-primary {
    padding: 10px 30px;
    font-size: 16px;
}
</style>
@endsection