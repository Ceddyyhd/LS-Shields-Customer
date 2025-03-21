@extends('layouts.vertical', ['title' => 'Eventplanung', 'subTitle' => 'Meine Events'])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Event</th>
                        <th>Ort</th>
                        <th>Event Lead</th>
                        <th>Anfrage</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ Carbon\Carbon::parse($event->datum_uhrzeit)->format('d.m.Y H:i') }}</td>
                        <td>{{ $event->event }}</td>
                        <td>{{ $event->ort }}</td>
                        <td>{{ $event->event_lead }}</td>
                        <td>{{ Str::limit($event->anfrage, 50) }}</td>
                        <td>
                            <span class="badge bg-{{ 
                                $event->status === 'in Bearbeitung' ? 'warning' : 
                                ($event->status === 'in Planung' ? 'info' : 
                                ($event->status === 'Abgeschlossen' ? 'success' : 'secondary')) 
                            }}">
                                {{ $event->status }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection