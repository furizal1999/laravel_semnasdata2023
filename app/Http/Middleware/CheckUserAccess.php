<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

use Closure;
use Session;

class CheckUserAccess
{
    public function handle($request, Closure $next)
    {
        if(((null == Session::get('login_semnasdata')) && (null == Session::get('username')) && ("2" != Session::get('level')))){
            return redirect(route("guest.home"));
		}
        // Lanjutkan ke proses berikutnya
        return $next($request);
    }
}