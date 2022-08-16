<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    // To get the home page
    public function index(){
        $listings = Listing::all();
        return view('listings', [
            'listings' => $listings,
        ]);
    }

    //show single listing
    public function show(Listing $listing){
        return view('listing', [
            'listing' => $listing,
        ]);
    }
}
