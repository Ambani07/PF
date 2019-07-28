<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;

class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $products = Product::all();
        
        $customers = Customer::orderBy('created_at')->get();

        return view('pages.index')->with(['customers' => $customers, 'products' => $products]);
    }
}
