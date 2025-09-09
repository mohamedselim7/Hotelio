<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\RoomController;
Route::get('/', function () {
    return view('welcome');
});
// Rooms
Route::get('/Rooms',[RoomController::class,'RoomsPage']);
Route::get('AddRoom',[RoomController::class,'AddRoomPage']);
Route::post('AddRoom',[RoomController::class,'AddRoom']);
Route::get('/DeleteRoom/{id}',[RoomController::class,'DeleteRoom']);
//contact
Route::get('/Contact', [FirstController::class,'ContactPage']);
Route::post('/Contact', [FirstController::class,'ContactUs']);