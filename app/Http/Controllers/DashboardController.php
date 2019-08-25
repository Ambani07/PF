<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Category;
use App\Site;
use DB;

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

        // return $this->getMonthlySitesData();
        $sites = Site::orderBy('created_at', 'ASC')->get();

        
        return view('pages.index')->with('sites', $sites);
    }

    function getAllMonths(){
        $month_array = array();
        $sites_dates = Site::orderBy('created_at', 'ASC')->pluck('created_at')->toJson();
        $sites_dates = json_decode($sites_dates);

        // dd($sites_dates);

        if(!empty($sites_dates)){
            foreach ($sites_dates as $key => $item) {
                $date = new \DateTime($item);
                $month_no = $date->format('m');
                $month_name = $date->format('M');
                $month_array[$month_no] = $month_name;
                // return $month_name;
            }
        }

        return $month_array;
    }

    function getMonthlySitesCount($month){
        return  Site::whereMonth('created_at', $month)->get()->count();
    }

    function getMonthlySitesData(){

        $monthly_sites_count_array = array();
        $month_array = $this->getAllMonths();
        $month_name_array = array();
        if(!empty($month_array)){
            foreach ($month_array as $month_no => $month_name) {
                $monthly_sites_count = $this->getMonthlySitesCount($month_no);
                \array_push($monthly_sites_count_array, $monthly_sites_count);
                \array_push($month_name_array, $month_name);
            }
        }

        $max_no = max($monthly_sites_count_array);
        $max = round(($max_no + 10/2)/10) * 10;
        $monthly_sites_data_array = array(
            'months' => $month_name_array,
            'sites_count_data' => $monthly_sites_count_array,
            'max' => $max
        );
        

        return $monthly_sites_data_array;
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        // $sites = Site::where('name', 'like', "%$search%")
        //              ->orWhere('street', 'like', "%$search%")
        //              ->orWhere('suburb', 'like', "%$search%")
        //              ->orWhere('city', 'like', "%$search%")->paginate(1);

        $sites = Site::search($search)->paginate(1);
        

        // dd($sites);

        return view('sites.search')->with('sites', $sites);
    }

    
}
