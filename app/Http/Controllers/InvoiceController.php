<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = DB::connection('mysql2')
            ->table('invoices')
            ->where('customer_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('customer.invoice', compact('invoices'));
    }

    public function show($id)
{
    // Get invoice
    $invoice = DB::connection('mysql2')
        ->table('invoices')
        ->where('id', $id)
        ->where('customer_id', auth()->id())
        ->first();

    if (!$invoice) {
        abort(404);
    }

    // Get invoice items
    $items = DB::connection('mysql2')
        ->table('invoice_items')
        ->where('invoice_id', $id)
        ->get();

    $invoice->invoice_date = Carbon::parse($invoice->invoice_date);
    $customer = auth()->user();

    return view('customer.invoice-show', compact('invoice', 'customer', 'items'));
}
}