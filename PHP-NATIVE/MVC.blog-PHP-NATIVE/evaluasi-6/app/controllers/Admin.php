<?php

class Admin extends Controller
{
    public function detail()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['str'] = $this->model('Artikel_model')->getAllArtikel();
        $this->view('templates/admin', $data);
        $this->view('admin/detail', $data);
        $this->view('templates/footer');
    }


    public function Pengaturan()
    {
        $data['judul'] = 'Halaman CRUD';
        $data['str'] = $this->model('User_model')->getAllCrud();
        $this->view('templates/admin', $data);
        $this->view('admin/dashbord', $data);
        $this->view('templates/footer');
    }

    public function user()                                         //user
    {
        $data['judul'] = 'Halaman CRUD';
        $data['str'] = $this->model('User_model')->getAlluser();
        $this->view('templates/admin', $data);
        $this->view('admin/user_detail', $data);
        $this->view('templates/footer');
    }

    public function detailUser($id)                                 //detail user
    {
        $data['judul'] = 'Detail User';
        $data['str'] = $this->model('User_model')->getIdUser($id);
        $this->view('templates/admin', $data);
        $this->view('admin/detail_user', $data);
        $this->view('templates/footer');
    }


    public function index()                                         // admin
    {
        $data['judul'] = 'Halaman CRUD';
        $data['str'] = $this->model('User_model')->getAdmin();
        $this->view('templates/admin', $data);
        $this->view('admin/user', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Artikel_model')->tambahData($_POST) > 0) {
            Flasher::setflash('berhasil ', ' ditambahkan ', 'success');
            header('Location: ' . BASEURL . '/Admin');
            exit;
        } else {
            Flasher::setflash('gagal', ' ditambahkan ', 'danger');
            header('Location: ' . BASEURL . '/Dashbord');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Artikel_model')->hapusData($id) > 0) {
            Flasher::setflash('berhasil ', ' dihapus ', 'success');
            header('Location: ' . BASEURL . '/detail');
            exit;
        } else {
            Flasher::setflash('gagal', ' dihapus ', 'danger');
            header('Location: ' . BASEURL . '/detail');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Artikel_model')->getId($_POST['id']));
    }

    public function ubah()
    {
        try {
            //code...
            if ($this->model('User_model')->ubahData($_POST) > 0) {
                Flasher::setflash('berhasil ', ' diUpdate ', 'success');
                header('Location: ' . BASEURL . '/Blog');
                exit;
            } else {
                Flasher::setflash('gagal', ' diUpdate ', 'danger');
                header('Location: ' .   BASEURL . '/Blog');
                exit;
            }
        } catch (Exception $th) {
            $th->getMessage();
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/Home');
    }


    public function masukAdmin($id)
    {
        $data['judul'] = 'Admin Punya';
        $data['str'] = $this->model('Login_model')->loginAdmin($id);
        $this->view('templates/header', $data);
        $this->view('sigup/index_2', $data);
        $this->view('templates/footer');
    }



    public function masuk1()
    {
        if ($this->model('Login_model')->loginAdmin($_POST) > 0) {
            Flasher::setLogin('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else {
            Flasher::setLogin(' Gagal   ', ' Dimohon Untuk Register Terlebih Dahulu ', 'danger');
            header('Location: ' . BASEURL . '/Login');
            exit;
        }
    }
}
