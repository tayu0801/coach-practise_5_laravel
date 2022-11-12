<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/building', [TestController::class, 'building'])->name('building');
Route::get('/building/{room_no?}', [TestController::class, 'room'])->name('room');
