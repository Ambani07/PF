<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use App\Category;
use App\User;
use App\Site;
use Session;

class CustomersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();

        

        return view('customers.index')->with('sites', $sites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Category::all();

        return view('customers.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'contactPerson' => 'required',
        //     'contactPersonPhone' => 'required',
        //     'contactPersonCell' => 'required',
        //     'contactPersonEmail' => 'required',
        //     'typeOfService' => 'required',
        //     'sla' => 'required',
        //     'coverPeriod' => 'required',
        //     'serviceClass' => 'required'
        // ]);

        // dd($request->all());

        // $customer = new Customer;
        // $customer->name = $request->input('name');
        // $customer->contactPerson = $request->input('contactPerson');
        // $customer->contactPersonPhone = $request->input('contactPersonPhone');
        // $customer->contactPersonCell = $request->input('contactPersonCell');
        // $customer->contactPersonEmail = $request->input('contactPersonEmail');



        Session::put('customer', $request->all());
        // dd($customer);

        return redirect('services/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = Site::find($id);
        // dd($site);
        $customer = Customer::find($site->customer_id)->first();

        

        // $products = Category::all();

        return view('customers.show')->with(['customer' => $customer, 'site' => $site]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $customer = Customer::find($id);

        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required|min:2',
            'contactPerson' => 'required',
            'contactPersonEmail' => 'required|email',
            'contactPersonPhone' => 'nullable',
            'contactPersonCell' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->contactPerson = $request->input('contactPerson');
        $customer->contactPersonPhone = $request->input('contactPersonPhone');
        $customer->contactPersonCell = $request->input('contactPersonCell');
        $customer->contactPersonEmail = $request->input('contactPersonEmail');

        $customer->save();

        return redirect('/customers')->with('success', 'Customer Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $customer = Customer::find($id);
        $product = Product::where('customer_id', $customer->id)->delete();
        // dd($product);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer Deleted');
    }
}
