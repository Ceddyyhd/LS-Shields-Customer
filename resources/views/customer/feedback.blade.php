@extends('layouts.vertical', ['title' => 'Feedback', 'subTitle' => 'Feedback geben'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Feedback</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('customer.feedback.store') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bewertung</label>
                            <select class="form-select" name="rating" required>
                                <option value="">Bitte wählen</option>
                                <option value="Sehr gut">Sehr gut</option>
                                <option value="Gut">Gut</option>
                                <option value="Befriedigend">Befriedigend</option>
                                <option value="Ausreichend">Ausreichend</option>
                                <option value="Mangelhaft">Mangelhaft</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ihr Feedback</label>
                            <textarea class="form-control" name="comment" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Feedback senden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection