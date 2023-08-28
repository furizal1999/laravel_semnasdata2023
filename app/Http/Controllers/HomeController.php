<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function index(Request $request){
         return view('home');
    } 
}
