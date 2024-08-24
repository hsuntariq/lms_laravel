<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/dashboard/{home}','student.dashboard')->name('dashboard');
Route::view('/tasks/{assignments}','student.pages.assignments')->name('assignments');