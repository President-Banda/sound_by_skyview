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

Route::get('/', function () {
    return view('providers', [
        'listings' => Listing::all(),
    ]);
});

Route::get('/listing/{listing}', function(Listing $listing) {
    $listing = Listing::find($listing->id);
    return view('listing', [
        'listing' => $listing,
    ]);

});

