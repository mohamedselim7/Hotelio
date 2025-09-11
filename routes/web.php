<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\PhotosVideosController;
use App\Http\Controllers\DashboardController;
 Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Home
Route::get('/',[FirstController::class,'HomePage'] );
// Rooms
Route::get('/Rooms',[RoomController::class,'RoomsPage']);
Route::get('AddRoom',[RoomController::class,'AddRoomPage'])->middleware('auth');
Route::post('AddRoom',[RoomController::class,'AddRoom']);
Route::get('/DeleteRoom/{id}',[RoomController::class,'DeleteRoom'])->middleware('auth');
//contact
Route::get('/Contact', [FirstController::class,'ContactPage']);
Route::post('/Contact', [FirstController::class,'ContactUs']);
//services
Route::get('/Services', [FirstController::class,'ServicesPage']);
Route::get('/AddServices',[RoomController::class,'AddServicePage']);
Route::post('/AddServices',[RoomController::class,'AddService']);
//rates
Route::get('/YourOpinion',[RateController::class,'YourOpinionPage']);
Route::post('/AddYourOpinion',[RateController::class,'AddYourOpinion']);
//Photos & Videos
Route::get('/PhotosVideos',[PhotosVideosController::class,'PhotosAndVideosPage']);
Route::get('/AddPhotoAndVideo',[PhotosVideosController::class,'AddPhotosAndVideosPage']);
Route::post('Addvideo',[PhotosVideosController::class,'Addvideo']);
Route::post('Addphoto',[PhotosVideosController::class,'Addphoto']);
// admin
Route::get('/Admin',[DashboardController::class,'DashboradPage'])->middleware('CheckRolle:admin');
Route::get('/Addvideo&photo',[DashboardController::class,'AddPhotosAndVideosPage'])->middleware('CheckRolle:admin');
Route::get('/AddRoom',[DashboardController::class,'AddRoomPage'])->middleware('CheckRolle:admin');
Route::get('/AddServices',[DashboardController::class,'AddServicePage'])->middleware('CheckRolle:admin');
Route::get('/Users',[DashboardController::class,'UsersPage'])->middleware('CheckRolle:admin');
Route::get('/Opinions',[DashboardController::class,'OpininosPage'])->middleware('CheckRolle:admin');

