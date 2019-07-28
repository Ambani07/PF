<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Customer;
use App\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Category::select('id', 'name')->get();
        // $customer;
        if(session()->exists('customer')){
            $customer = session()->get('customer');
        }

        // dd(session()->get('customer'));

        // session()->put('customer_exist', session()->get('customer'));

        // dd(session()->all());


        return view('customers.product')->with([session()->get('customer'), 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Category::select('id', 'name')->get();


        return view('customers.product')->with( 'products', $products);
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
            'product_id' => 'required',
            'term' => 'required',
            'vland_id' => 'required',
            'circuit_no' => 'required',
            'no_ips' => 'required',
            'total_bandwidth' => 'required',
            'local_bandwidth' => 'required',
            'int_bandwidth' => 'required',
            'accessType' => 'required',
            'accessSpeed' => 'required',
            'ei_option' => 'nullable',
            'bandwidth_scheduling' => 'nullable',
            'prioritisation' => 'nullable',
            'product_name' => 'required',
            'username' => 'required',
            'access_username' => 'required'
        ]);

        $customer = Session::get('customer');

        // create customer
        $newCustomer = new Customer;
        $newCustomer->firstname = $customer['firstname'];
        $newCustomer->lastname = $customer['lastname'];
        $newCustomer->email = $customer['email'];
        $newCustomer->company = $customer['company'];
        $newCustomer->street = $customer['street'];
        $newCustomer->suburb = $customer['suburb'];
        $newCustomer->city = $customer['city'];
        $newCustomer->region = $customer['region'];
        $newCustomer->contactPerson = $customer['contactPerson'];
        $newCustomer->contactPersonPhone = $customer['contactPersonPhone'];
        $newCustomer->contactPersonCell = $customer['contactPersonCell'];
        $newCustomer->contactPersonEmail = $customer['contactPersonEmail'];
        

        if($newCustomer->save()){
            $customerProduct = new Product;
            $customerProduct->product_id = $request->input('product_id');
            $customerProduct->customer_id = $newCustomer->id;
            $customerProduct->term = $request->input('term');
            $customerProduct->vland_id = $request->input('vland_id');
            $customerProduct->circuit_no = $request->input('circuit_no');
            $customerProduct->no_ips = $request->input('no_ips');
            $customerProduct->total_bandwidth = $request->input('total_bandwidth');
            $customerProduct->local_bandwidth = $request->input('local_bandwidth');
            $customerProduct->int_bandwidth = $request->input('int_bandwidth');
            $customerProduct->accessType = $request->input('accessType');
            $customerProduct->accessSpeed = $request->input('accessSpeed');
            $customerProduct->ei_option = $request->input('ei_option');
            $customerProduct->bandwidth_scheduling = $request->input('bandwidth_scheduling');
            $customerProduct->prioritisation = $request->input('prioritisation');
            $customerProduct->product_name = $request->input('product_name');
            $customerProduct->username = $request->input('username');
            $customerProduct->access_username = $request->input('access_username');


            if($customerProduct->save()){
                return redirect('customers');
            }else{
                return redirect('customers.product');
            }
        }else{
            return redirect('customers.create');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
