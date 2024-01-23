<?php

namespace App\Controllers;

use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Intervention\Image\ImageManagerStatic as Image;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        // echo view('/admin/menuutama');
        echo view('/admin/login');
        // echo view('footer');
    }
    public function test()
    {
        echo view('header');
        // echo view('/admin/menuutama');
        echo view('test');
        echo view('footer');
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
        $model = new M_model();
        $data['galeri'] = $model->tampil('photos');
        echo view('header');
        // echo view('menu');
        echo view('gallery', $data);
        echo view('footer');
    }
    public function portofolio()
    {
        $model = new M_model();
        $data['projects'] = $model->tampil('photos');
        echo view('header');
        // echo view('menu');
        echo view('portofolio', $data);
        echo view('footer');
    }
    public function upload()
    {
        echo view('/header');
        // echo view('menu');
        echo view('/admin/upload');
        // echo view('/footer');
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
    public function register()
    {
        $model = new M_model();

        $data['user'] = $model->tampil('user');
        echo view('header');
        // echo view('menuutama');
        echo view('register', $data);
        // echo view('footer');
    }
    public function aksi_register()
    {
        $model = new M_model();
        // $on='guru.user = user.id_user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');

        $user = array(
            'username' => $username,
            'password' => md5('password'),
            'email' => $email,
            'level' => '1',
            'created_at' => date('Y-m-d H:i:s')
        );
        $model = new M_model();
        $model->simpan('user', $user);
        return redirect()->to('/home');
    }
    public function aksi_upload()
    {
        $description = $this->request->getPost('description');
        $category = $this->request->getPost('category');

        $imageFile = $this->request->getFile('image');
        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('assets/images/', $imageName);

            // Gunakan Intervention Image untuk mengubah ukuran gambar
            $img = Image::make('assets/images/' . $imageName);
            $img->resize(355, 465);
            $img->save('assets/images/' . $imageName);
        } else {
            $imageName = 'default.jpg';
        }

        $data = [
            'description' => $description,
            'image' => $imageName,
            'category' => $category,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $model = new M_model();
        $model->simpan('photos', $data);

        return redirect()->to('/home/portofolio');
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