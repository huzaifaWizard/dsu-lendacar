<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
//        $companies = Company::orderBy('id','desc')->paginate(5);
        return view('index');
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'color' => 'required',
            'variant' => 'required',
            'price' => 'required',
            'date' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required'
        ]);

        company::create([
            'make' => $request->make,
            'model' => $request->model,
            'color' => $request->color,
            'variant' => $request->variant,
            'price' => $request->price,
            'date' => $request->date,
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address
        ]);

        return redirect()->route('show')->with('success', 'Company has been created successfully.');
    }


    public function show(Company $company)
    {
        $companies = Company::orderBy('id','desc')->paginate(5);
        return view('listing', compact('company'));
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('listings')->with('success', 'Company has been deleted successfully');
    }
}
