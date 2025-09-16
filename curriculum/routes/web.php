<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CurriculumController::class, 'index']);
Route::get('/home', [CurriculumController::class, 'index']);
Route::get('/competence', [CurriculumController::class, 'competence']);
Route::get('/parcours', [CurriculumController::class, 'parcours']);
Route::get('/formation', [CurriculumController::class, 'formation']);
Route::get('/contact', [CurriculumController::class, 'contact']);
Route::post('/contact', [CurriculumController::class, 'contactForm']);
Route::get('/profil', [CurriculumController::class, 'profil']);
