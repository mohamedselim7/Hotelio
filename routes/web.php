<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\PhotosVideosController;
// Home
Route::get('/',[FirstController::class,'HomePage'] );
// Rooms
Route::get('/Rooms',[RoomController::class,'RoomsPage']);
Route::get('AddRoom',[RoomController::class,'AddRoomPage']);
Route::post('AddRoom',[RoomController::class,'AddRoom']);
Route::get('/DeleteRoom/{id}',[RoomController::class,'DeleteRoom']);
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
Route::get('/AddPhoto&Video',[PhotosVideosController::class,'AddPhotosAndVideosPage']);
Route::post('Addvideo',[PhotosVideosController::class,'Addvideo']);
Route::post('Addphoto',[PhotosVideosController::class,'Addphoto']);