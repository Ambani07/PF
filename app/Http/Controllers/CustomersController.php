<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use App\Category;
use App\User;
use Session;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $customers = Customer::orderBy('created_at', 'desc')->get();
        $customers = Customer::orderBy('created_at', 'desc')->paginate(2);
        // $customers = Customer::all();


        return view('customers.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            'street' => 'required',
            'suburb' => 'required',
            'city' => 'required',
            'region' => 'required',
            'contactPerson' => 'required',
            'contactPersonPhone' => 'required',
            'contactPersonCell' => 'required',
            'contactPersonEmail' => 'required'
        ]);

        Session::put('customer', $request->all());

        return redirect('/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);

        $product = Product::find(1);

        // dd($customer->user->name);

        return view('customers.show')->with(['customer' => $customer, 'product' => $product]);
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
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            'street' => 'required',
            'suburb' => 'required',
            'city' => 'required',
            'region' => 'required',
            'contactPerson' => 'required',
            'contactPersonPhone' => 'required',
            'contactPersonCell' => 'required',
            'contactPersonEmail' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->email = $request->input('email');
        $customer->company = $request->input('company');
        $customer->street = $request->input('street');
        $customer->suburb = $request->input('suburb');
        $customer->city = $request->input('city');
        $customer->region = $request->input('region');
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
