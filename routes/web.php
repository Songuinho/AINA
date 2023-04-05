<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
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

Route::get('/', [HomeController::class, "index"])->name('home');

Route::get('/contacter-nous', function(){
    return view('contact');
})->name('contact');

Route::get('/FAQ', function(){
    return view('faq');
})->name('questions');

Route::get('/commander-des-textes', function(){
    return view('order_texts');
})->name('ordertext');

Route::get('/commander-un-devis',  function(){
    return view('order_quote');
})->name('orderquote');

Route::get('/redaction',  function(){
    return view('redaction');
})->name('redaction');

Route::get('/integration',  function(){
    return view('integration');
})->name('integration');

Route::get('/traduction',  function(){
    return view('traduction');
})->name('traduction');

// Route::get('/Se-connecter',  function(){
//     return view('auth.login')->with(["focus" => " "]);
// })->name('login');

// Route::get('/Inscription',  function(){
//     return view('auth.register')->with(["focus" => " "]);
// })->name('register');

Route::post('/envoie-du-mail', [MailController::class , 'sendmail'])->name('send.mail');

Route::post('/souscribtion', [MailController::class , 'subscribe'])->name('subscribe.mail');
