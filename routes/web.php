<?php
// routes/web.php

use App\Http\Controllers\BarangController;

Route::get('/barang', [BarangController::class, 'index'])->name('index');
Route::get('/create', [BarangController::class, 'create'])->name('create');
Route::post('/store', [BarangController::class, 'store'])->name('store');
Route::get('/barang/edit/{barang}', [BarangController::class, 'edit'])->name('edit');
Route::put('/barang/update/{barang}', [BarangController::class, 'update'])->name('update');
Route::delete('/barang/destroy/{barang}', [BarangController::class, 'destroy'])->name('destroy');
