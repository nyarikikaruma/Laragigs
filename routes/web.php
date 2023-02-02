<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//All listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest heading',
        'listings' => Listing::all()
    ]);
});
//Single listing
Route::get('/listing/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});
