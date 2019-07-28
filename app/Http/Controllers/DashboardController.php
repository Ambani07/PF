<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;

class DashboardController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        
        $customers = Customer::orderBy('created_at')->get();

        $user_id = auth()->user('id');
        // $user = User::find($user_id);
        // dd($user_id);

        // dd([$customers, $products->customer()]);
        
        return view('pages.index')->with(['customers' => $customers, 'products' => $products]);
    }
}
