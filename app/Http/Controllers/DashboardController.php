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
        $sites = Site::all();

        // $sites_count = Site::('')

        $viewer = Site::select(DB::raw("SUM(name) as count"))
        ->orderBy("created_at")
        ->groupBy(DB::raw("year(created_at)"))
        ->get()->toArray();
        $viewer = array_column($viewer, 'count');

        $click = Customer::select(DB::raw("SUM(name) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $click = array_column($click, 'count');

        // dd($sites->count());

        
        return view('pages.index')->with([  'sites' => $sites,
                                            'viewer' => json_encode($viewer,JSON_NUMERIC_CHECK),
                                            'click' => json_encode($click,JSON_NUMERIC_CHECK)]);
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
