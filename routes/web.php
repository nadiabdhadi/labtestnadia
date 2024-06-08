<?php

use Illuminate\Support\Facades\Route;
use App\Http\Cpntrollers\ArmstrongController;

Route::get('/', [ArmstrongController::class, 'index'])->name('armstrong.index');
Route::post('/check', [ArmstrongController::class, 'check'])->name('armstrong.check');
