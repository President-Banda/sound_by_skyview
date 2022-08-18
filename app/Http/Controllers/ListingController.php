<?php

namespace App\Http\Controllers;
use App\Model\Listing;

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
        $listing = Listing::find($listing->id);
        return view('listing', [
            'listing' => $listing,
        ]);
    }
}
