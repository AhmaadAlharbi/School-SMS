<?php

use Illuminate\View\View;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardsController;

// use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('', [Controller::class, 'index']);


// Route::get('/', [DashboardsController::class, 'index']);
// Route::get('index', [DashboardsController::class, 'index']);
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', [DashboardsController::class, 'index']);

    Route::get('test', function () {
        return View::make('test');
    });
});
