<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\AddCar;

class AddCarController extends Controller
{
    function index()
    {
        return view('index');
    }
    function addCar()
    {
        return view('rent');
    }
    function details()
    {
        return view('listing-details');
    }
    function thanks()
    {
        return view('thanks');
    }

    function carView(){
        return view('listings');
    }
}
