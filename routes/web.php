<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload','index');
    Route::post('image-upload','imageUpload')->name('image.store');
});