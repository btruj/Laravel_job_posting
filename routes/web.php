<?php


use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

//all listings
Route::get('/', [ListingController::class, 'index']);

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


//naming conventions
//common resource routes:
//index - show all listings
//show - show single listing
//create - show form to create new listing
//store - store new listing
//edit - show form to edit listing
//update - update listing
//destroy - delete listing



// Route::get('/hello',  function () {
//       return response('<h1>Hello World</h1>', 200)
//       ->header('Content-Type', 'text/plain')
//       ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
    //dd($id);//debug
   // ddd($id);//dump,die,debug
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->city;//url is /search?name=Brad&city=Boston 
// });