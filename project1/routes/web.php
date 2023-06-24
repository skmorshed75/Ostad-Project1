<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\resumeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Page Routes
Route::get('/',[homeController::class,'page']);
Route::get('/contact',[contactController::class,'page']);
Route::get('/projects',[projectController::class,'page']);
Route::get('/resume',[resumeController::class,'page']);

//Ajax Data Provider Routes
Route::get('/herodata',[homeController::class,'heroData']); //home page
Route::get('/aboutData',[homeController::class,'aboutData']); //home page
Route::get('/socialData',[homeController::class,'socialData']); //home page

Route::get('/projectsData',[projectController::class,'projectsData']);//project page

Route::get('/resumeLink',[resumeController::class,'resumeLink']); //resume page
Route::get('/experienceData',[resumeController::class,'experienceData']);//resume page
Route::get('/educationData',[resumeController::class,'educationData']);//resume page
Route::get('/skillsData',[resumeController::class,'skillsData']);//resume page
Route::get('/languageData',[resumeController::class,'languageData']);//resume page

Route::get('/contactRequest',[contactController::class,'contactRequest']); //contact page

