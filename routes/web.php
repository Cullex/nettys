<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//return admin dashboard with data
Route::get('/dashboard', [DashboardController::class, 'index']);
//return gallery page
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


//subscriptions controller
Route::post('/postEmail',[SubscriptionController::class, 'store'] )->name('postEmail');
//get mailing list
Route::get('/mailingList', [SubscriptionController::class, 'index']);


//contact routes
//route to submit contact us info
Route::post('/contactUs', [ContactController::class, 'store'])->name('store');
//view selected contact info
Route::get('/viewQuery/{model}', [ContactController::class, 'show']);
//return all queries
Route::get('/allQueries', [ContactController::class, 'allQueries']);

//application routes
//route to submit application info
Route::post('/apply', [ApplicationController::class, 'apply'])->name('apply');
//return all application
Route::get('/getApplications', [ApplicationController::class, 'index']);
//return application to view
Route::get('/viewApplication/{model}', [ApplicationController::class, 'show']);
//return all applications
Route::get('/allApplications', [ApplicationController::class, 'allApplications']);


















//login aunthenticated user
Route::post('loginUser', [AuthenticationController::class, 'login'])->name('loginUser');

require __DIR__.'/auth.php';


