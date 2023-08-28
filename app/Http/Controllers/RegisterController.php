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
            'nama_pt' => 'required|max:255',
            'prodi' => 'required|max:255',
            'alamat' => 'required',
            'keikutsertaan' => 'required',
        ]);
        if($this->register->seminarRegister($data)){
            return redirect(route("guest.home"))->with(['notif' => "success", 'message' => "Selamat, pendaftaran berhasil. Panitia akan memverifikasi data anda dan mengundang anda bergabung di WA group!"]);
        }else{
            return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Maaf, pendaftaran gagal. Silahkan coba lagi!"]);
        }
    }

    // function login(Request $request){
    //     $row = $this->login->getUser($request->email);
    //     if($row){
    //         if($row->account_status=="Active"){
    //             if(password_verify($request->password, $row->password)){
    //                 Session::put('login_smartlight', true);
    //                 Session::put('user_id', $row->user_id);
    //                 Session::put('email', $row->email);
    //                 Session::put('name', $row->name);
    //                 Session::put('sex', $row->sex);
    //                 Session::put('created_at', $row->created_at);
    //                 return redirect(route("user.control.light"));
    //                 exit;
    //             }else{
    //                 return redirect(route("user.auth"))->with(['alertclass' => "danger"])->with(['message' => "Maaf, password tidak sesuai"]);
    //             }
    //         }else{
    //             return redirect(route("user.auth"))->with(['alertclass' => "danger"])->with(['message' => "Maaf, Akun anda sedang tidak aktif!"]);
    //         }
    //     }else{
    //         return redirect(route("user.auth"))->with(['alertclass' => "danger"])->with(['message' => "Maaf, username yang anda masukkan salah!"]);
    //     }
    // }

    // function logout(){
    //     Session::flush();
    //     return redirect(route('user.auth'));
    // }
}
