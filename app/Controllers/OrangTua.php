<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrangTuaModel;

class OrangTua extends BaseController
{
    protected $ot;
    public function __construct() {
        $this->ot = new OrangTuaModel();
    }
    public function index()
    {
        $data['orangtua'] =  $this->ot->findAll();
        return view("orangtua/orangtua", $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)> 0 ){
            try {
                $this->ot->insert($item);
                return redirect()->to(base_url('orangtua'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('orangtua/tambah');
    }
    public function ubah($id)
    {
        $item = $this->request->getPost();
        if (isset($item['orangtua'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "nik_ayah"=>$item['nik_ayah'],
                        "nik_ibu"=>$item['nik_ibu'],
                        "nama_ayah"=>$item['nama_ayah'],
                        "nama_ibu"=>$item['nama_ibu'],
                    ];
                    $this->ot->update($id,$value);
                    return redirect()->to(base_url('orangtua'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->ot->where('orangtua', $id)->first();
            return view('orangtua/ubah', $item);
        } 
    }
    public function hapus($id)
    {
        $this->ot->delete($id);
        return redirect()->to(base_url("orangtua"));
    }
}
