<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\Sample\SampleController;
use App\Http\Middleware\HelloMiddleware;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::middleware([HelloMiddleware::class])->group(function () {
//   Route::get('/hello', [HelloController::class, 'index']);
//   Route::get('/hello/other', [HelloController::class, 'other']);
// });
// Route::namespace('Sample')->group(function (){
//   Route::get('/sample', [SampleController::class, 'index']);
//   Route::get('/sample/other', [SampleController::class, 'other']);
// });
// Route::get('/sample', [SampleController::class, 'index'])->name('sample');
Route::get('/hello', [HelloController::class, 'index'])->middleware('MyMW');
Route::post('/hello', [HelloController::class, 'index']);
Route::get('/hello/{id}', [HelloController::class, 'index'])->middleware(App\Http\Middleware\MyMiddleware::class);

