<?php

namespace App\Http\Controllers;
use App\Models\Listing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    // To get the home page
    public function index(){
        //dd(request('tag'));
        $listings = Listing::latest()->filter(request(['tag']))->get();
        return view('listings.index', [
            'listings' => $listings,
        ]);
    }

    //show single listing
    public function show(Listing $listing){
        $listing = Listing::find($listing->id);
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }
}
