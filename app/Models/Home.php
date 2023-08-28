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
}
