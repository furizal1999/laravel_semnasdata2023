<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
use Session;


class DashboardBusinessPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function __construct(){
        $this->register = new Register;
        $this->home = new Home;
    }

    function index(Request $request){
        $sendData['getBpcData'] = $this->home->getBpcData(Session::get('id_akun'));
        return view('dashboard_businessplan', $sendData);
    } 

    function bpcRegister(Request $request){
        if(isset($request->_token) && isset($request->bpc_register)){
            $data = $request->validate([
                'nama_tim' => ['required'],
                'nama_bisnis' => ['required'],
                'nama_ketua' => ['required'],
                'nik_ketua' => ['required', 'digits:16'],
                'asal_pt_ketua' => ['required'],
                'prodi_ketua' => ['required'],
                'nomor_wa_ketua' => ['required', 'numeric'],
                'anggota' => ['required'],
                'ringkasan_ide_bisnis' => ['required'],
                'file_proposal' => ['mimes:pdf', 'max:10480'],
                'file_bukti_bayar' => ['mimes:pdf,jpeg,png,jpg', 'max:10480'],
            ]);
            $id_akun = Session::get('id_akun');
            if(!isset($data['file_proposal'])){
                $file_proposal = $this->home->getBpcData($id_akun)->file_proposal;
            }else{
                $file = $request->file('file_proposal');
                $file_proposal = $file->hashName();
                $tempName = $file->getPathName();
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $allowedExtensions = ['application/pdf'];
                $fileExtension = finfo_file($finfo, $tempName);
                if(!in_array($fileExtension, $allowedExtensions)) {
                    return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, ada masalah dengan file proposal yang anda pilih. Pastikan bahwa file anda bisa dibuka sebagai file PDF!"]);
                }else{
                    if($file->store('public/img/proposal')){
                        // no action
                    }else{
                        return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, gagal mengupload proposal!"]);
                    }
                }
                finfo_close($finfo);
            }

            if(!isset($data['file_bukti_bayar'])){
                $file_bukti_bayar = $this->home->getBpcData($id_akun)->file_bukti_bayar;
            }else{
                $file = $request->file('file_bukti_bayar');
                $file_bukti_bayar = $file->hashName();
                $tempName = $file->getPathName();
                $finfo = finfo_open(FILEINFO_MIME_TYPE);
                $allowedExtensions = [
                                        'application/pdf',
                                        'image/jpeg',
                                        'image/png',
                                        'image/jpg',
                                    ];
                $fileExtension = finfo_file($finfo, $tempName);
                if(!in_array($fileExtension, $allowedExtensions)) {
                    return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, ada masalah dengan file bukti bayar yang anda pilih. Pastikan bahwa file anda bisa dibuka sebagai file PDF/JPG/PNG/JPEG!"]);
                }else{
                    if($file->store('public/img/bukti_bayar')){
                        // no action
                    }else{
                        return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, gagal mengupload bukti bayar!"]);
                    }
                }
                finfo_close($finfo);
            }

            if($this->home->checkDraft($id_akun)>0){
                //editDraft
                $id_peserta_bpc = $this->home->getBpcData($id_akun)->id_peserta_bpc;
                if($this->register->updateDraft($data, $file_proposal, $file_bukti_bayar, $id_peserta_bpc)){
                    return redirect(route("businessplan.home"))->with(['notif' => "success", 'message' => "Data berhasil disimpan sebagai draft."]);
                }else{
                    return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, data gagal disimpan."]);
                }
            }else{
                if($this->register->bpcRegister($data, $file_proposal, $file_bukti_bayar, $id_akun)){
                    return redirect(route("businessplan.home"))->with(['notif' => "success", 'message' => "Data berhasil disimpan sebagai draft."]);
                }else{
                    return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, data gagal disimpan."]);
                }
            }
        }else{             
            return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Opss.. Ada Kesalahan."]);
        }
    }

    function bpcSubmit(Request $request){
        if(isset($request->_token) && isset($request->bpc_submit)){
            $data = $request->validate([
                'id_peserta_bpc' => ['required'],
            ]);
            if($this->register->submitBpc($data['id_peserta_bpc'])){
                return redirect(route("businessplan.home"))->with(['notif' => "success", 'message' => "Selamat, proposal anda berhasil diajukan. Kami akan menghubungi anda di WhatsApp."]);
            }else{
                return redirect(route("businessplan.home"))->with(['notif' => "danger", 'message' => "Maaf, proposal gagal diajukan."]);
            }
        }else{             
            return redirect(route("guest.home"))->with(['notif' => "danger", 'message' => "Opss.. Ada Kesalahan."]);
        }
    }
}
