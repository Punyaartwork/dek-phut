<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JSONController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/donations', function () {
    return view('donations');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects/1', function () {
    return view('subjects');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('tosubject', [JsonController::class, 'index']);
Route::post('json-file-download', [JsonController::class, 'download']);