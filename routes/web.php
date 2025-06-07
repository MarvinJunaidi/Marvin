<?php

use Illuminate\Support\Facades\Route;
Route::redirect('/', '/home');

Route::get('/home', function () {
    $npm = '2327240003';
    $nama = 'Marvin Junaidi';
    return view('home', compact('npm', 'nama'));
});
