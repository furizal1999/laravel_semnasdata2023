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

    function bpcRegister($data, $file_proposal, $file_bukti_bayar, $file_surat_pernyataan, $id_akun){
        $result = DB::table('peserta_bpc')
            ->insert([
                'nama_tim' => $data['nama_tim'],
                'nama_bisnis' => $data['nama_bisnis'],
                'nama_ketua' => $data['nama_ketua'],
                'nik_ketua' => $data['nik_ketua'],
                'asal_pt_ketua' => $data['asal_pt_ketua'],
                'prodi_ketua' => $data['prodi_ketua'],
                'anggota' => $data['anggota'],
                'nomor_wa_ketua' => $data['nomor_wa_ketua'],
                'ringkasan_ide_bisnis' => $data['ringkasan_ide_bisnis'],
                'qrcode_bpc' => '',
                'file_proposal' => $file_proposal,
                'file_bukti_bayar' => $file_bukti_bayar,
                'file_surat_pernyataan' => $file_surat_pernyataan,
                'id_akun' => $id_akun,
                'status_submit' => "Draft",
            ]);
        return $result;
    }

    
    function updateDraft($data, $file_proposal, $file_bukti_bayar, $file_surat_pernyataan, $id_peserta_bpc){
        // dd($id_peserta_bpc);
        $result = DB::table('peserta_bpc')
            ->where("id_peserta_bpc", $id_peserta_bpc)
            ->where("status_submit", "Draft")
            ->update([
                'nama_tim' => $data['nama_tim'],
                'nama_bisnis' => $data['nama_bisnis'],
                'nama_ketua' => $data['nama_ketua'],
                'nik_ketua' => $data['nik_ketua'],
                'asal_pt_ketua' => $data['asal_pt_ketua'],
                'prodi_ketua' => $data['prodi_ketua'],
                'anggota' => $data['anggota'],
                'nomor_wa_ketua' => $data['nomor_wa_ketua'],
                'ringkasan_ide_bisnis' => $data['ringkasan_ide_bisnis'],
                'qrcode_bpc' => '',
                'file_proposal' => $file_proposal,
                'file_bukti_bayar' => $file_bukti_bayar,
                'file_surat_pernyataan' => $file_surat_pernyataan,
            ]);
            
        return $result;
    }

    function submitBpc($id_peserta_bpc){
        $result = DB::table('peserta_bpc')
            ->where("id_peserta_bpc", $id_peserta_bpc)
            ->update([
                'status_submit' => 'Submit',
            ]);
        return $result;
    }

    function accountRegister($data){
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);
        $result = DB::table('akun')
            ->insert([
                'username' => $data['email'],
                'password' => $hash,
                'level' => $data['level'],
                'status' => "Y",
            ]);
        return $result;
    }
}
