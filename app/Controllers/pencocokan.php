<?php

namespace App\Controllers;

use App\Controllers\A_Pencocokan as ControllersA_Pencocokan;
use CodeIgniter\Controller;
use App\Models\A_Pencocokan;

class pencocokan extends Controller
{
    public function __construct()
    {
        $this->model = new A_Pencocokan();
    }

    public function index()
    {


        $data = [
            'judul' => 'Data Pencocokan',
            'pencocokan' => $this->model->getAllData()

        ];

        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');

        echo view('pencocokan/index');
        echo view('templates/v_footer');
    }
    public function tambah()
    {
        if (isset($_POST['tambah'])) {
            $val = $this->validate([
                'id_pencocokan' => 'required',
                'judul1' => 'required',
                'judul2' => 'required',
                'hasil_pencocokan' => 'required'

            ]);

            if (!$val) {

                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Pencocokan',
                    'pencocokan' => $this->model->getAllData()
                ];

                echo view('template/v_header', $data);
                echo view('template/v_sidebar');
                echo view('template/v_topbar');
                echo view('Penghuni/index', $data);
                echo view('template/v_footer');
            } else {
                $data = [
                    'id_pencocokan' => $this->request->getPost('id_pencocokan'),
                    'judul1' => $this->request->getPost('judul1'),
                    'judul2' => $this->request->getPost('judul2'),
                    'hasil_pencocokan' => $this->request->getPost('hasil_pencocokan')

                ];

                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url('pencocokan'));
                }
            }
        } else {
            return redirect()->to('/pencocokan');
        }
    }
    public function hapus($id_pencocokan)
    {
        $success = $this->model->hapus($id_pencocokan);
        if ($success) {
            session()->setFlashdata('message', 'Dihapus');
            return redirect()->to(base_url('pencocokan'));
        }
    }
    public function ubah()
    {
        if (isset($_POST['ubah'])) {
            $val = $this->validate([
                'id_pencocokan' => 'required',
                'judul1' => 'required',
                'judul2' => 'required',
                'hasil_pencocokan' => 'required'

            ]);

            if (!$val) {

                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Data Pencocokan',
                    'pencocokan' => $this->model->getAllData()
                ];

                echo view('template/v_header', $data);
                echo view('template/v_sidebar');
                echo view('template/v_topbar');
                echo view('Penghuni/index', $data);
                echo view('template/v_footer');
            } else {
                $id_pencocokan = $this->request->getPost('id_pencocokan');
                $data = [
                    'judul1' => $this->request->getPost('judul1'),
                    'judul2' => $this->request->getPost('judul2'),
                    'hasil_pencocokan' => $this->request->getPost('hasil_pencocokan'),

                ];

                $success = $this->model->ubah($data, $id_pencocokan);
                if ($success) {
                    session()->setFlashdata('message', 'Diubahkan');
                    return redirect()->to(base_url('pencocokan'));
                }
            }
        } else {
            return redirect()->to('/pencocokan');
        }
    }
}
