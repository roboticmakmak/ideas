<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::Class ,'index']);
Route::get('/profile',[ProfileController::Class ,'index']);
