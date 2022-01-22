<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnimalController;
Route::get('/', function () {
    return view('welcome');
});
