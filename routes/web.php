<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsController;
use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class ,'index']);
Route::get('/profile',[ProfileController::class ,'index']);
Route::get('/terms',[TermsController::class ,'index']);
Route::post('/idea',[IdeaController::class ,'store'])->name('idea.create');
