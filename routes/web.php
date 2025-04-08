<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
Route::get('/job-listings', [PageController::class, 'jobListings'])->name('job_listings');

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/job-listings', [PageController::class, 'jobListings'])->name('job_listings');
Route::get('/job-details/{id}', [PageController::class, 'jobDetails'])->name('job-details');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Route for the home page
Route::get('/', [PageController::class, 'index'])->name('index');

// Route for the job listings page
Route::get('/job-listings', [PageController::class, 'jobListings'])->name('job_listings');

// Route for job details page
Route::get('/job-details/{id}', [PageController::class, 'jobDetails'])->name('job-details');

// Route for the about page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Route for the contact page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/job-listings', [PageController::class, 'jobListings'])->name('job-listings');
Route::get('/job-details/{id}', [PageController::class, 'jobDetails'])->name('job-details');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');