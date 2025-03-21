<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnfragenController;
use App\Http\Controllers\EventplanungController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\TeamController;
// Landing page routes - public access
Route::get('/', function() {
    return view('landingpage.home');
})->name('home');

Route::get('/landingpage/{page}', function($page) {
    return view("landingpage.{$page}");
})->name('landingpage');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', function() {
    return view('landingpage.about');
})->name('about');
Route::get('/service', function() {
    return view('landingpage.services');
})->name('service');
Route::get('/partner', function() {
    return view('landingpage.partner');
})->name('partner');
Route::get('/impressum', function() {
    return view('landingpage.impressum');
})->name('impressum');
Route::get('/', [App\Http\Controllers\TeamController::class, 'homeTeam'])->name('home');

Route::get('/teams', [App\Http\Controllers\TeamController::class, 'index'])->name('teams');
Route::get('/galerie', [App\Http\Controllers\GalleryController::class, 'index'])->name('galerie');
Route::get('/bewerbung', [App\Http\Controllers\ApplicationController::class, 'create'])->name('application.create');
Route::post('/bewerbung', [App\Http\Controllers\ApplicationController::class, 'store'])->name('application.store');
// Authentication routes
require __DIR__ . '/auth.php';

// Protected customer routes
Route::group(['prefix' => 'customer', 'middleware' => 'auth'], function () {
    // Dashboard routes
    Route::get('/', function() {
        return redirect()->route('customer.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('customer.dashboard');
    Route::get('/dashboard/announcements', [DashboardController::class, 'getAnnouncements'])
        ->name('customer.dashboard.announcements');
    
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('customer.feedback');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('customer.feedback.store');
    
    // Settings routes
    Route::get('/settings', [SettingsController::class, 'index'])->name('customer.settings');
    Route::put('/settings/update', [SettingsController::class, 'update'])
        ->name('customer.settings.update');
    Route::get('/profile', [ProfileController::class, 'index'])->name('customer.profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('customer.profile.update');

    Route::get('/invoices', [InvoiceController::class, 'index'])->name('customer.invoices');
    Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('customer.invoice.show');

    Route::get('/anfragen', [AnfragenController::class, 'index'])->name('customer.anfragen');
    Route::post('/anfragen', [AnfragenController::class, 'store'])->name('customer.anfragen.store');
    Route::get('/eventplanung', [EventplanungController::class, 'index'])->name('customer.eventplanung');


    // Wildcard routes last
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});