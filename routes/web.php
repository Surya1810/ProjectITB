<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BuddyController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Register Stage 2
Route::post('/getting_ready/store/{id}', [HomeController::class, 'stage_2'])->name('stage_2.store');
// Register Stage 3
Route::post('/almost_finish/store/{id}', [HomeController::class, 'stage_3'])->name('stage_3.store');
///////////////after stage 3 done, belum ada notif pop up
///////////////button tutup sidebar
///////////////animation if match

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::get('/almost_finish', function () {
        return view('auth.stage_3');
    })->name('stage_3');
    Route::get('/getting_ready', function () {
        return view('auth.stage_2');
    })->name('stage_2');

    //Buddy
    Route::resource('buddy', BuddyController::class);
    Route::get('/buddy/match/{id}', [BuddyController::class, 'match'])->name('buddy.match');
    Route::post('/buddy/arrange', [BuddyController::class, 'arrange'])->name('buddy.arrange');

    //Booking - Court
    Route::resource('booking', BookingController::class);
    Route::get('/court/{id}', [BookingController::class, 'index'])->name('booking.list');
    Route::get('/court/{category}/{id}', [BookingController::class, 'create'])->name('booking.detail');
    // Route::post('/order/detail', [BookingController::class, 'store'])->name('order.detail');

    //Eqt
    Route::resource('equipment', EquipmentController::class);

    //Order Detail
    Route::get('/done', [EquipmentController::class, 'done'])->name('done');
});
