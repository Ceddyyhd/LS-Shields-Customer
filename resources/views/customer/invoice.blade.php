@extends('layouts.vertical', ['title' => 'Invoice', 'subTitle' => 'Invoices List'])

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive table-centered">
                    <table class="table text-nowrap mb-0">
                        <thead class="bg-light bg-opacity-50">
                            <tr>
                                <th class="border-0 py-2">Rechnungsnummer</th>
                                <th class="border-0 py-2">Rechnungsdatum</th>
                                <th class="border-0 py-2">Fälligkeitstage</th>
                                <th class="border-0 py-2">Zwischensumme</th>
                                <th class="border-0 py-2">Rabatt %</th>
                                <th class="border-0 py-2">Rabattbetrag</th>
                                <th class="border-0 py-2">Gesamtbetrag</th>
                                <th class="border-0 py-2">Status</th>
                                <th class="border-0 py-2">Aktionen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->invoice_number }}</td>
                                <td>{{ date('d.m.Y', strtotime($invoice->invoice_date)) }}</td>
                                <td>{{ $invoice->payment_due_days }}</td>
                                <td>€ {{ number_format($invoice->subtotal, 2, ',', '.') }}</td>
                                <td>{{ $invoice->discount_percent }}%</td>
                                <td>€ {{ number_format($invoice->discount_amount, 2, ',', '.') }}</td>
                                <td>€ {{ number_format($invoice->total, 2, ',', '.') }}</td>
                                <td>
                                    <span class="badge bg-{{ $invoice->status === 'Offen' ? 'warning' : 'success' }}">
                                        {{ $invoice->status }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('customer.invoice.show', $invoice->id) }}" 
                                       class="btn btn-sm btn-info">
                                        <i class="bx bx-show me-1"></i>Anzeigen
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection