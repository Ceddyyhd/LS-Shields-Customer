@extends('layouts.vertical', ['title' => 'Rechnung Details', 'subTitle' => 'Rechnung'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Logo & title -->
                <div class="clearfix">
                    <div class="float-sm-end">
                        <div class="auth-logo">
                            <img class="logo-dark me-1" src="/images/logo-dark.png" alt="logo-dark" height="24" />
                        </div>
                        <h6 class="fw-normal text-muted">Dienstleister</h6>
                        <address class="mt-3">
                            LS-Shields<br />
                            Straße XXX<br />
                            6006 - Los Santos<br />
                            <abbr title="Telefon">T:</abbr>
                            6006
                        </address>
                    </div>
                    <div class="float-sm-start">
                        <h5 class="card-title mb-2">
                            Rechnung: {{ $invoice->invoice_number }}
                            <span class="badge bg-{{ 
                                $invoice->status === 'Bezahlt' 
                                    ? 'success' 
                                    : ($invoice->status === 'Offen' && Carbon\Carbon::parse($invoice->invoice_date)->addDays($invoice->payment_due_days)->gt(now()) 
                                        ? 'warning' 
                                        : 'danger') 
                            }}">
                                {{ $invoice->status }}
                            </span>
                        </h5>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <h6 class="fw-normal text-muted">Kunde</h6>
                        <h6 class="fs-16">{{ $customer->name }}</h6>
                        <address>
                            {{ $customer->street }}<br />
                            {{ $customer->plz }} - {{ $customer->city }}<br />
                            <abbr title="Telefon">T:</abbr> {{ $customer->nummer }}
                        </address>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive table-borderless text-nowrap mt-3 table-centered">
                            <table class="table mb-0">
                                <thead class="bg-light bg-opacity-50">
                                    <tr>
                                        <th class="border-0 py-2">Beschreibung</th>
                                        <th class="border-0 py-2">Menge</th>
                                        <th class="border-0 py-2">Preis</th>
                                        <th class="text-end border-0 py-2">Gesamt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ number_format($item->price, 2, ',', '.') }} €</td>
                                        <td class="text-end">{{ number_format($item->total, 2, ',', '.') }} €</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-7">
                    <div class="clearfix pt-xl-3 pt-0">
                        <h6 class="text-muted">Hinweise:</h6>
                        <small class="text-muted">
                            Zahlbar innerhalb von {{ $invoice->payment_due_days }} Tagen nach Erhalt der Rechnung.
                            Zahlungsfrist endet am: {{ $invoice->invoice_date->addDays($invoice->payment_due_days)->format('d.m.Y') }}
                            <br>
                            Bitte überweisen Sie den Betrag auf das angegebene Konto.
                        </small>
                    </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="float-end">
                            <p>
                                <span class="fw-medium">Zwischensumme: </span>
                                <span class="float-end">{{ number_format($invoice->subtotal, 2, ',', '.') }} €</span>
                            </p>
                            @if($invoice->discount_percent > 0)
                            <p>
                                <span class="fw-medium">Rabatt ({{ $invoice->discount_percent }}%):</span>
                                <span class="float-end">{{ number_format($invoice->discount_amount, 2, ',', '.') }} €</span>
                            </p>
                            @endif
                            <h3>{{ number_format($invoice->total, 2, ',', '.') }} €</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection