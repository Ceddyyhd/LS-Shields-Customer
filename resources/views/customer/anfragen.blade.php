@extends('layouts.vertical', ['title' => 'Anfragen', 'subTitle' => 'Meine Anfragen'])

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAnfrageModal">
                Neue Anfrage erstellen
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Anfrage</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anfragen as $anfrage)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($anfrage->datum_uhrzeit)->format('d.m.Y H:i') }}</td>
                        <td>
                            <div style="white-space: pre-line">{{ $anfrage->anfrage }}</div>
                        </td>
                        <td>
                            <span class="badge bg-{{ $anfrage->status === 'Eingetroffen' ? 'warning' : 
                                ($anfrage->status === 'In Bearbeitung' ? 'info' : 
                                ($anfrage->status === 'Abgeschlossen' ? 'success' : 'secondary')) }}">
                                {{ $anfrage->status }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createAnfrageModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Neue Anfrage erstellen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('customer.anfragen.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="mb-0">Ansprechpartner Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Ansprechpartner Name</label>
                            <input type="text" class="form-control" name="kontakt_name" value="{{ auth()->user()->kontakt_name }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ansprechpartner Nummer</label>
                            <input type="text" class="form-control" name="kontakt_nummer" value="{{ auth()->user()->kontakt_nummer }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="mb-0">Einsatz Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Maximale Mitarbeiter</label>
                            <input type="number" class="form-control" name="max_mitarbeiter" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ort</label>
                            <input type="text" class="form-control" name="ort" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Datum & Uhrzeit</label>
                            <input type="datetime-local" class="form-control" name="datum_uhrzeit" required>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="mb-0">Anliegen</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <textarea class="form-control" name="anliegen" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                    <button type="submit" class="btn btn-primary">Absenden</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection