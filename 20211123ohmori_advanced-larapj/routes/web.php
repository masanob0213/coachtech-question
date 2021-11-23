<?php

use Illuminate\Support\Facades\Route; //上部に追記

use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);