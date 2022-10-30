<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class JenisBarang extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('jenis_barang');
        $query   = $builder->get();
    
        $data['jenisbarang'] = $query->getResult();
        return view('jenisbarang/index',$data);
    }

    public function create()
    {
        return view('jenisbarang/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('jenis_barang')->insert($data);  

        if($this->db->affectedRows()>0){
            return redirect()->to(site_url('jenisbarang'))->with('success','Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if($id !=null){
            $query = $this->db->table('jenis_barang')->getWhere(['id' =>$id]);
            if($query->resultID->num_rows>0){
                $data['jenis_barang'] = $query->getRow();
                return view('jenisbarang/edit',$data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id)
    {
        $data = $this->request->getPost(); 
        unset($data['_method']);
        $this->db->table('jenis_barang')->where(['id'=>$id])->update($data); 

        return redirect()->to(site_url('jenisbarang'))->with('success','Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('jenis_barang')->where(['id'=>$id])->delete(); 

        return redirect()->to(site_url('jenisbarang'))->with('success','Data Berhasil Dihapus');
    }
}
