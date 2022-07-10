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

        // Checking if there was an image uploaded
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Add Ownership to Listings
        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show Edit Form
    public function edit(Listing $listing) {
        // dd($listing);
        return view ('listings.edit', ['listing' => $listing]);
    }

    public function logos (Request $request, String $id) {
        // $id = $request["id"];
        return $id;
    }

    public function update(Request $request, Listing $listing) {

        //        This validation is going to take in an array
        //        we can specify what rules we want for certain fields

        // Make sure logged-in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
                    'title'       => 'required',
                    'company'     => ['required'],
                    'location'    => 'required',
                    'website'     => 'required',
                    'email'       => ['required', 'email'],
                    'tags'        => 'required',
                    'description' => 'required'
                ]);
        
                // Checking if there was an image uploaded
                if($request->hasFile('logo')) {
                    $formFields['logo'] = $request->file('logo')->store('logos', 'public');
                }
        
                $listing->update($formFields);
        
                return back()->with('message', 'Listing updated successfully!');
            }

            // Delete Listing
            public function destroy(Listing $listing) {

                // Make sure logged-in user is owner
                if($listing->user_id != auth()->id()) {
                    abort(403, 'Unauthorized Action');
                }

                $listing->delete();
                return redirect('/')->with('message','Listing deleted successfully!');
            }

            // Manage Listings
            public function manage() {
                // By creating the relationships in with eloquent it comes handy
                // It should get all the currently  logged-in users listings and pass them into this view as listings
                return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
            }
        
}
