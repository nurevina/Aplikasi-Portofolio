<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Vendor;

class HomeController extends Controller
{
    public function index(){
        $data = Portfolio::with('vendor')->get();
        //  dd($data);
        // $vendor = Vendor::all();
        // dd($vendor->products);
        return view('home', compact('data'));
    }
}
