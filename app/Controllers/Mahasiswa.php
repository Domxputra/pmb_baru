<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mhs;

    public function __construct() {
        $this->mhs = new MahasiswaModel() ;
    }
    public function index()
    {
        $data['mahasiswa'] = $this->mhs->findAll();
        return view("mahasiswa/mahasiswa", $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)> 0 ){
            try {
                $this->mhs->insert($item);
                return redirect()->to(base_url('mahasiswa'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('mahasiswa/tambah');
    }

    public function ubah($id=null)
    {
        $item = $this->request->getPost();
        if (isset($item['mahasiswa'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "nama_lengkap"=>$item['nama_lengap'],
                        "tanggal_lahir"=>$item['tanggal_lahir'],
                        "jenis_kelamin"=>$item['jenis_kelamin'],
                        "asal_sma"=>$item['asal_sma'],
                        "email_mhs_baru"=>$item['email_mhs_baru'],
                        "no_tlp"=>$item['no_tlp'],
                        "status"=>$item['status'],
                        "kode_pos"=>$item['kode_pos'],
                        "sumber_biaya"=>$item['sumber_biaya'],
                        "informasi"=>$item['informasi'],
                    ];
                    $this->mhs->update($id,$value);
                    return redirect()->to(base_url('mahasiswa'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->mhs->where('nik', $id)->first();
            return view('mahasiswa/ubah_mahasiswa', $item);
        } 
    }
    public function hapus($id)
    {
        $this->mhs->delete($id);
        return redirect()->to(base_url("mahasiswa"));
    }
}
