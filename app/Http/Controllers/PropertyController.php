<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PropertyController extends Controller
{
    //
	public function create(){
		return view('create');
	}
	
	public function store(Request $request){
		$credentials = $request->validate([
			'title' => ['required', 'string', 'max:255'],
			'number_of_bedrooms' => ['required', 'integer', 'min:1'],
			'number_of_bathrooms' => ['required', 'numeric', 'min:1'],
			'location' => ['required', 'string', 'max:255'],
			'price' => ['required', 'numeric', 'min:0'],
			'type' => ['required', 'in:House,Apartment'],
			'description' => ['nullable', 'string'],
			'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
		]);
		
		if($request->hasFile('photo')){
			$credentials['photo'] = $request->file('photo')->store('Property_Photos', 'public');
		}
		
		Property::create($credentials);
		
		return redirect()->route('index')->with('success', 'Propery listing created successfully!');
	}
	
	public function index(): view{
		$properties = Property::all();
        return view('index', compact('properties'));
	}
	
	public function single(Property $property): view{
        return view('single', compact('property'));
	}
}
