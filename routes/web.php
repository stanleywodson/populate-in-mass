<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('userAgent')->group(callback: function () {

Route::get('wodson', function() { return 'Wodson'; });

Route::get('carneiro', function() { return 'Carneiro'; });

});

Route::get('stanley', fn () => abort(404));

Route::get('checkout', \App\Http\Controllers\CheckoutController::class);

Route::get('test', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('store', [\App\Http\Controllers\UserController::class, 'store'])->name('store');


Route::fallback(function () {
   return 'Página não encontrada!';
});

//MAIL

Route::get('send-email', [\App\Http\Controllers\Mailer\AuthMailerController::class, 'sendRegisterMail'])->name('sendEmail');
