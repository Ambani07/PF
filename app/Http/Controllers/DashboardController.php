<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Category;

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
        $products = Category::all();
        
        $customers = Customer::orderBy('created_at')->get();

        $user_id = auth()->user('id');
        // $user = User::find($user_id);
        // dd($products);

        // dd([$customers, $products->customer()]);
        
        return view('pages.index')->with(['customers' => $customers, 'products' => $products]);
    }
}
