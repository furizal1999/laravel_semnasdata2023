<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct(){
        $this->register = new Register;
    }

    // function index(Request $request){
    //     return view('welcome');
    // }

    function seminarRegister(Request $request){
        $data = $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'nim' => 'required|max:20',
            'wa' => 'required',
            'email' => 'required|email|max:255',
            'nama_pt' => 'max:255',
            'prodi' => 'max:255',
            'alamat' => 'required',
            'keikutsertaan' => 'required',
        ]);
        if($this->register->seminarRegister($data)){
            return redirect(route("guest.home"))->with(['notif' => "success", 'message' => "Selamat, pendaftaran berhasil. Panitia akan memverifikasi data anda dan mengundang anda bergabung di WA group!"]);
        }else{
            return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Maaf, pendaftaran gagal. Silahkan coba lagi!"]);
        }
    }

    function accountRegister(Request $request){
         $data = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|min:8',
            'konf_password' => 'required|min:8|same:password',
            'level' => 'required',
        ]);
        if($this->register->accountRegister($data)){
            return redirect(route("guest.home"))->with(['notif' => "success", 'message' => "Selamat, akun Anda berhasil didaftarkan. Silahkan login untuk mendaftar business plan competition!"]);
        }else{
            return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Maaf, pendaftaran akun Anda gagal. Silahkan coba lagi!"]);
        }
    }
}
