<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers = Customer::orderBy('created_at', 'desc')->get();
        $customers = Customer::orderBy('created_at', 'desc')->paginate(1);
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            // 'company' => 'required',
            'street' => 'required',
            'suburb' => 'required',
            'city' => 'required',
            'region' => 'required',
            'contactPerson' => 'required',
            'contactPersonPhone' => 'required',
            'contactPersonCell' => 'required',
            'contactPersonEmail' => 'required',
            'term' => 'required'
        ]);

        return $request;

        //create customer
        $customer = new Customer;
        // $customer->name = $request->input('name');
        // $customer->surname = $request->input('surname');
        // $customer->email = $request->input('email');
        // $customer->company = $request->input('company');
        $customer->save();

        return redirect('/customers')->with('success', 'Customer added.') ;
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

        return view('customers.show')->with('customer', $customer);
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
    }
}
