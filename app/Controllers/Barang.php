<?php

namespace App\Controllers;

use App\Models\crudModel;

class Barang extends BaseController
{
    protected $crudModel;
    public function __construct()
    {
        $this->crudModel = new crudModel();
    }
    public function crud()
    {
        // $databarang = $this->crudModel->findAll();
        $data = [
            'title' => 'Data Barang',
            'databarang' => $this->crudModel->getDetail()
        ];
        echo view('barang/crud', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Data',
            'detail' => $this->crudModel->getDetail($id)
        ];
        if (empty($data['detail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan :(");
        }
        return view('barang/details', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Data Baru',

        ];
        return view('barang/create', $data);
    }
    public function save()
    {
        // $this->request->getVar();
        $this->crudModel->save([
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil ditambahkan");
        return redirect()->to('/barang/crud');
    }
    public function delete($id)
    {
        $this->crudModel->delete($id);
        return redirect()->to('/barang/crud');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Form edit data',
            'detail' => $this->crudModel->getDetail($id)

        ];
        return view('barang/edit', $data);
    }
    public function update($id)
    {

        // $this->request->getVar();
        $this->crudModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'stok' => $this->request->getVar('stok')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil diubah");
        return redirect()->to('/barang/crud');
    }
}
