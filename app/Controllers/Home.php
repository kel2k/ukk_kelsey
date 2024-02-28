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
    public function like($id)
    {
        $model = new M_Model();
        // $where2=array('id_post'=>$id);
        $data2 = array(
            'project_id' => $id,
            'user_id' => session()->get('id'),
            'created_at' => date('Y-m-d H:i:s')
        );

        // print_r($data2);
        $model->simpan('likes', $data2);

        return redirect()->to('/Home/portofolio/' . $id);
    }

    public function dislike($id)
    {
        $model = new M_Model();
        // $where2=array('id_post'=>$id);
        $data2 = array(
            'project_id' => $id,
            'user_id' => session()->get('id'),
        );

        // print_r($data2);
        $model->hapus('likes', $data2);

        return redirect()->to('/Home/portofolio/' . $id);
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
        $id_user = session()->get('id_user');
        
        // Fetch photos based on user_id directly from the 'photos' table
        $data['galeri'] = $model->where('user_id', $id_user)->findAll();
        
        echo view('header');
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
    public function comment()
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
    $user_id = session()->get('id_user');

    $imageFile = $this->request->getFile('image');
    
    if ($imageFile->isValid() && !$imageFile->hasMoved()) {
        $imageName = $imageFile->getRandomName();
        $imageFile->move('assets/images/', $imageName);

        // Use Intervention Image to resize the image
        $img = Image::make('assets/images/' . $imageName);
        $img->resize(355, 465);
        $img->save('assets/images/' . $imageName);
    } else {
        $imageName = 'default.jpg';
    }

    $data = [
        'user_id' => $user_id, // Assign user_id to the logged-in user's id
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
        session()->set('id_user', $cek['id_user']);
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
    public function hapus($id)
    {
        $model = new M_model();

        // Kondisi untuk menghapus data dari tabel 'anggota'
        $where1 = array('id_photos' => $id);
   
        $model->hapus('photos', $where1);

        return redirect()->to(base_url('/home/gallery'));
    }
    public function aksi_like($id)
    { 
        if(session()->get('level')==1) {
            $model = new M_galeri();

            $idUser = session()->get('id_user');

            // Periksa apakah user sudah memberikan like atau belum
            if (!$model->isLiked($id, $idUser)) {
            // Jika belum, lakukan like
                $data1 = array(
                    'gambar' => $id,
                    'user' => $idUser
                );
                $model->simpan('like', $data1);
            } else {
            // Jika sudah, lakukan unlike
                $model->hapusLike($id, $idUser);
            }

            return redirect()->to('home/portofolio/'. $id);
        } else {
            return redirect()->to('login');
        }
    }
}