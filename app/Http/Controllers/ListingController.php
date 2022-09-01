<?php

namespace App\Http\Controllers;
use App\Models\Listing;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // To get the home page
    public function index(){
        //dd(Listing::latest()->filter(request(['tag', 'search']))->paginate(5));
        $listings = Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(2);
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

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        //dd($request->file('logo'));
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required|max:255',
            'tags' => 'required|max:255',
        ]);

        if($request->hasFile('logo')){
            $validatedData['logo'] = $request->file('logo')->store('logos', 'public');
        }
        //dd($validatedData);
//        else{
//            dd('No file');
//        }

        Listing::create($validatedData);


        return redirect('/')->with('message', 'Listing created successfully');
    }

    public function edit(Listing $listing){
        //dd($listing);
        return view('listings.edit', [
            'listing' => $listing,
        ]);
    }

    //update listing
    public function update(Request $request, Listing $listing){
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required|max:255',
            'tags' => 'required|max:255',
        ]);

        if($request->hasFile('logo')){
            $validatedData['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $validatedData['user_id'] = auth()->user()->id;
        //dd($validatedData);
//        else{
//            dd('No file');
//        }

        $listing->update($validatedData);
        return back()->with('message', 'Listing updated successfully');
    }

    public function destroy(Listing $listing){
        //dd($listing);
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}
