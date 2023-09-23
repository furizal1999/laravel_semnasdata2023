<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
use Session;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function __construct(){
        $this->home = new Home;
    }

    function index(Request $request){
        $data['checkPesertaSeminar'] = $this->home->checkPesertaSeminar("Offline");
        return view('home', $data);
    } 

    function login(Request $request){
        $row = $this->home->getUser($request->email);
        if($row){
            if($row->status=="Y"){
                if(password_verify($request->password, $row->password)){
                    Session::put('login_semnasdata', true);
                    Session::put('id_akun', $row->id_akun);
                    Session::put('username', $row->username);
                    Session::put('level', $row->level);
                    return redirect(route("businessplan.home"))->with(['notif' => "success", 'message' => "Anda berhasil login!"]);
                    exit;
                }else{
                    return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Maaf, password tidak sesuai!"]);
                }
            }else{
                return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Maaf, Akun anda sedang tidak aktif!"]);
            }
        }else{
            return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Maaf, username yang anda masukkan salah!"]);
        }
    }

    function logout(){
        Session::flush();
        return redirect(route("guest.home"))->with(['notif' => "success", 'message' => "Anda berhasil keluar. Terima kasih telah berpartisipasi!"]);
    }
}
