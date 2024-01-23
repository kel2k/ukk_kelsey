<?php

namespace App\Controllers;

use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
        echo view('/admin/header');
        // echo view('/admin/menuutama');
        echo view('/admin/login');
        echo view('/admin/footer');
    }
    public function dashboard()
    {
        echo view('header');
        // echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }
    public function gallery()
    {
        echo view('header');
        // echo view('menu');
        echo view('gallery');
        echo view('footer');
    }
    public function portofolio()
    {
        echo view('header');
        // echo view('menu');
        echo view('portofolio');
        echo view('footer');
    }
    public function upload()
    {
        echo view('/admin/header');
        // echo view('menu');
        echo view('/admin/upload');
        echo view('/admin/footer');
    }
    public function gantipassword()
    {

        $model = new M_model();
        $data['murid'] = $model->tampil('user');
        echo view('header');
        echo view('menu');
        echo view('change_password', $data);
        echo view('footer');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Home');
    }
    public function aksi_changepassword()
    {
        $model = new M_model();
        $id = $this->request->getPost('id');
        $password = $this->request->getPost('password');
        $where = array('id_user' => session()->get('id'));
        $data1 = array(
            'password' => md5($password),
            'updated_at' => date('Y-m-d H:i:s')
        );
        // print_r($password);
        $model->qedit('user', $data1, $where);
        return redirect()->to('/home/index/');
    }
    public function aksi_login()
    {
        $u = $this->request->getPost('username');
        $p = $this->request->getPost('password');
        $model = new M_model();
        $data = array(
            'username' => $u,
            'password' => md5($p)
        );
        $cek = $model->getWhere2('user', $data);

        if ($cek > 0) {
            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            // session()->set('email', $cek['email']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');
        } else {
            // Tambahkan kode berikut
            session()->setFlashdata('error', 'Salah password');
            return redirect()->to('/home/index');
        }
    }
    public function user()
    {
        $model = new M_model();
        $on = 'user.level=level.id_level';

        $data['vuser'] = $model->join2('user', 'level', $on);

        echo view('header');
        echo view('menu');
        echo view('tabel_user', $data);
        echo view('footer');
    }
}