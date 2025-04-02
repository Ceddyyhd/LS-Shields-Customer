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
            <form action="{{ route('application.store') }}" method="POST" class="application-form" enctype="multipart/form-data">
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
                        <label>{{ $questions['application_question_driver_license'] ?? 'Welche Führerscheine haben sie?' }}</label>
                        <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" required>
                        @error('position')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ $questions['application_question_experience'] ?? 'Welche Berufserfahrung haben sie?' }}</label>
                        <textarea name="experience" class="form-control @error('experience') is-invalid @enderror" rows="4" required></textarea>
                        @error('experience')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ $questions['application_question_motivation'] ?? 'Was Motiviert sie?'}}</label>
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

                    <div class="form-group">
    <label>Führungszeugnis</label>
    <div class="card">
        <div class="card-body">
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="certificate_type" id="certificate_url_radio" value="url" checked>
                <label class="form-check-label" for="certificate_url_radio">
                    URL/Link zum Führungszeugnis
                </label>
            </div>
            <div class="certificate-url-group">
                <input type="url" name="certificate_url" class="form-control @error('certificate_url') is-invalid @enderror" placeholder="https://...">
                @error('certificate_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-check mt-3 mb-3">
                <input class="form-check-input" type="radio" name="certificate_type" id="certificate_file_radio" value="file">
                <label class="form-check-label" for="certificate_file_radio">
                    Führungszeugnis als PDF hochladen
                </label>
            </div>
            <div class="certificate-file-group" style="display: none;">
                <input type="file" name="certificate_file" class="form-control @error('certificate_file') is-invalid @enderror" accept=".pdf">
                <small class="form-text text-muted">Max. 10MB, nur PDF-Dateien erlaubt</small>
                @error('certificate_file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlRadio = document.getElementById('certificate_url_radio');
        const fileRadio = document.getElementById('certificate_file_radio');
        const urlGroup = document.querySelector('.certificate-url-group');
        const fileGroup = document.querySelector('.certificate-file-group');
        
        urlRadio.addEventListener('change', function() {
            if (this.checked) {
                urlGroup.style.display = 'block';
                fileGroup.style.display = 'none';
            }
        });
        
        fileRadio.addEventListener('change', function() {
            if (this.checked) {
                urlGroup.style.display = 'none';
                fileGroup.style.display = 'block';
            }
        });
    });
</script>
@endsection