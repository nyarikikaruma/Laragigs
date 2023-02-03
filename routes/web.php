<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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
Route::get('/', [ListingController::class, 'index']);
//Single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);
// show create form
Route::get('/listing/create', [ListingController::class, 'create']);
