<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;
    function getUser($email){
        $data = DB::table('akun')
            ->where("username", "=", $email)
            ->first();
        return $data;
	}

    function getBpcData($id_akun){
        $data = DB::table('akun')
            ->join('peserta_bpc', 'peserta_bpc.id_akun', '=', 'akun.id_akun')
            ->where("akun.id_akun", "=", $id_akun)
            ->orderby('peserta_bpc.id_peserta_bpc', 'desc')
            ->first();
        return $data;
	}

    function checkDraft($id_akun){
        $data = DB::table('akun')
            ->join('peserta_bpc', 'peserta_bpc.id_akun', '=', 'akun.id_akun')
            ->where("akun.id_akun", "=", $id_akun)
            ->count();
        return $data;
	}

    function checkPesertaSeminar($keikutsertaan){
        $data = DB::table('peserta_seminar')
            ->where("keikutsertaan", "=", $keikutsertaan)
            ->count();
        return $data;
	}
    
}
