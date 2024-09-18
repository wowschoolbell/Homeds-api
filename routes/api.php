<?php
use App\Http\Controllers\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResource('stores', 'StoreController');
});

// Application Cache clear
Route::get('/cache-clear', function() {
    Artisan::call('optimize:clear');
    return "Cache cleared!";
 });

 // Storage Link
Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    return "Storage liniked Successfully!";
 });

 // Seeder 
Route::get('/seeder', function() {
    Artisan::call('db:seed');
    return "Seeded successfully!";
 });

 // Migration
 Route::get('/migrate', function() {
    Artisan::call('migrate');
    return "migrate!";
 });
 