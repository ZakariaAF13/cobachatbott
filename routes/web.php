<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
})->name('home');

Route::get('/fasilitas', function () {
    return view('facilities');
})->name('facilities');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/atraksi-wisata', function () {
    return view('attractions');
})->name('attractions');

Route::get('/galeri', function () {
    return view('gallery');
})->name('gallery');

Route::get('/kontak', function () {
    return view('contact');
})->name('contact');

Route::get('/paket-wisata', function () {
    return view('packages');
})->name('packages');

Route::post('/chatbot/chat', [App\Http\Controllers\ChatbotController::class, 'chat'])->name('chatbot.chat');
