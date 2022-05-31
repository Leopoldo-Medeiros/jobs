<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
//        dd(request());
        return view('listings.index',[
            // It's going to get passed in as the $filters declared as an array in Listing.php (Model)
            'listings' => Listing::latest()->filter(request(['tag',
            'search']))->paginate(4)
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

     // Show Create Form
    public function create() {
        return view('listings.create');
    }

    // Store Listing Data
    // I am using dependency injection data as a parameter
    public function store(Request $request) {
//        dd($request->all());

//        This validation is going to take in an array
//        we can specify what rules we want for certain fields

        $formFields = $request->validate([
            'title'       => 'required',
            'company'     => ['required', Rule::unique('listings',
            'company')],
            'location'    => 'required',
            'website'     => 'required',
            'email'       => ['required', 'email'],
            'tags'        => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
