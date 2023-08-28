<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Register extends Model
{
    use HasFactory;

    function seminarRegister($data){
        $result = DB::table('peserta_seminar')
            ->insert([
                'nama_peserta' => $data['nama_peserta'],
                'nim' => $data['nim'],
                'alamat' => $data['alamat'],
                'nama_pt' => $data['nama_pt'],
                'prodi' => $data['prodi'],
                'nomor_wa' => $data['wa'],
                'email_peserta' => $data['email'],
                'keikutsertaan' => $data['keikutsertaan'],
            ]);
        return $result;
    }

    function getUser($email){
        $data = DB::table('tb_user')
            ->where("email", "=", $email)
            ->where("account_status", "=", "Active")
            ->first();
        return $data;
	}

    function selectRequest($lamp_to){
        $data = DB::table('tb_light_status')
            ->where("status_data", "=", "Available")
            ->where("lamp_to", "=", $lamp_to)
            ->orderby('id_light_status', 'desc')->first();
        if($data){
            return $data->lamp_status;
        }else{
            return 0;
        }
	}
}
