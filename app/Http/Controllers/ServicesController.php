<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Customer;
use App\Site;
use App\Service;
use App\Network;
use Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::select('id', 'name')->get();

        // $customer = Session::get('customer');
 
        return view('services.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $customer = session()->get('customer');
        $service = $request->all();

        $customer = session()->get('customer');
        // dd(['customer' => $customer, 'service' => $service]);

        // create customer
        $newCustomer = new Customer;
        $newCustomer->name = $customer['name'];
        $newCustomer->user_id = auth()->user()->id;
        $newCustomer->contactPerson = $customer['contactPerson'];
        $newCustomer->contactPersonEmail = $customer['contactPersonEmail'];
        $newCustomer->contactPersonPhone = $customer['contactPersonPhone'];
        $newCustomer->contactPersonCell = $customer['contactPersonCell'];

        if($newCustomer->save()){
            $newService = new Service;
            $newService->customer_id = $newCustomer->id;
            $newService->user_id = auth()->user()->id;
            $newService->type_of_service = $customer['typeOfService'];
            $newService->sla = $customer['sla'];
            $newService->cover_period = $customer['coverPeriod'];
            $newService->service_class = $customer['serviceClass'];


            if($newService->save()){
                $newSite = new Site;
                $newSite->user_id = auth()->user()->id;
                $newSite->category_id = $request->input('category_id');
                $newSite->name = $request->input('name');
                $newSite->street = $request->input('street');
                $newSite->suburb = $request->input('suburb');
                $newSite->city = $request->input('city');
                $newSite->region_name = $request->input('regionName');
                $newSite->customer_id = $newCustomer->id;
                $newSite->service_id = $newService->id;
                
                if($newSite->save()){
                    $newNetwork = new Network;
                    //relation ids
                    $newNetwork->service_id = $newService->id;
                    $newNetwork->site_id = $newSite->id;
                    $newNetwork->user_id = auth()->user()->id;
                    //other fields
                    $newNetwork->circuit_no = $request->input('circuit_no');
                    $newNetwork->ntu = $request->input('ntu');
                    $newNetwork->ntu_name = $request->input('ntu_name');
                    $newNetwork->physical_interface = $request->input('physical_interface');
                    $newNetwork->encapsulation = $request->input('encapsulation');
                    $newNetwork->customer_facing_port = $request->input('customer_facing_port');
                    $newNetwork->customer_vlan = $request->input('customer_vlan');
                    $newNetwork->ntu_ip_address = $request->input('ntu_ip_address');
                    $newNetwork->link_subnet = $request->input('link_subnet');
                    $newNetwork->gateway_address = $request->input('gateway_address');
                    $newNetwork->bandwidth = $request->input('bandwidth');
                    $newNetwork->me_access_type = $request->input('me_access_type');
                    $newNetwork->me_node = $request->input('me_node');
                    $newNetwork->me_access_no = $request->input('me_access_no');
                    $newNetwork->me_port = $request->input('me_port');
                    
                    if($newNetwork->save()){

                        // dd($newNetwork);
                        return redirect('/dashboard')->with('success', 'Customer created successfully!...');
                    }
                }
            }
        }

        // Session::forget('customer');
        dd(['customer' => $customer, 'service' => $service]);
        // dd($request->all());
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
        $service = Service::find($id);

        // dd($service);

        return view('services.edit')->with('service', $service);
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
        // $this->validate($request, [
        //     'type_of_service' => 'required',
        //     'sla' => 'required',
        //     'cover_period' => 'required',
        //     'service_class' => 'nullable'
        // ]);
        

        $service = Service::find($id);
        $service->type_of_service = $request->input('type_of_service');
        $service->sla = $request->input('sla');
        $service->cover_period = $request->input('cover_period');
        $service->service_class = $request->input('service_class');
        // dd($service);
        $service->save();

        return redirect('/customers')->with('success', 'Service Updated');
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
