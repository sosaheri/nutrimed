<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


Route::statamic('nosotros', 'nosotros')->name('nosotros');
Route::statamic('contacto', 'contacto')->name('contacto');
Route::post('contacto-send', [ContactoController::class, 'send'])->name('contact.send');

