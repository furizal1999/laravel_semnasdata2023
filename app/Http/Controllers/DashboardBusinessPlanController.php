<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
use Session;


class DashboardBusinessPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function __construct(){
        $this->home = new Home;
    }

    function index(Request $request){
        return view('dashboard_businessplan');
    } 

}
