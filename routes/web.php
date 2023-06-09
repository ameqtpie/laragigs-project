<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing; 
use Illuminate\Http\Request;
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


// all listing
Route::get('/', [ListingController::class, 'index']);

// show create form 
Route::get('/listings/create', [ListingController::class, 'create']);

// store listing data
Route::post('/listings', [ListingController::class, 'store']);

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 


// reference matter
// Route::get('/hello', function () {
//     return response('<h1>hello world</h1>', 200)
//     ->header("Content-Type", "text/plain")
//     ->header("foo", "bar");
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     return $request->name . " " . $request->city;
// });

