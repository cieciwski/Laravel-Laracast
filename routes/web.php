<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome',[
    'tasks'=> [
        'asddsa',
        'dsads',
        'adds'
    ]
]);
Route::view('/about','about');
Route::view('/contact','contact');
