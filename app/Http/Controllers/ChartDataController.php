<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class ChartDataController extends Controller
{
    function getAllMonths(){
        $sites = Site::order_by('created_at', 'ASC')->pluck('created_at');

        return $sites;
    }
}
