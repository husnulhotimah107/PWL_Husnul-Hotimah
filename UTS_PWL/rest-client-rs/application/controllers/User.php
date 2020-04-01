<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Cetak_Model');
        $this->load->model('User_Model');

        if ($this->session->userdata('level') == "user" and $this->session->userdata('status') == "Tidak Aktif") {
            $this->session->sess_destroy();
            $data['pesan'] = "Maaf Anda Belum Aktif, Tolong Hubungi Admin";
            $data['title'] = 'Login User';
            $this->load->view('auth/template/header_auth', $data);
            $this->load->view('auth/login', $data);
        } elseif ($this->session->userdata('level') != "user" and $this->session->userdata('level') != "admin") {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        
        if ($this->session->userdata('level') == "user") {
            redirect('user', 'refresh');
        } elseif ($this->session->userdata('level') == "admin") {
            $data['title'] = 'Data Admin';
            $data['user'] = $this->User_Model->datatabels();
            $data['user'] = $this->User_Model->getAllUser();

            if ($this->input->post('keyword')) {
                $data['user'] = $this->User_Model->cariDataUser();
            }
            $this->load->view('template/header', $data);
            $this->load->view('user/list', $data);
            $this->load->view('template/footer');
        } else {
            redirect('auth', 'refresh');
        }
    }

    public function hapus($id_user)
    {

        $this->User_Model->hapusDataUser($id_user);
        $this->session->flashdata('flash-data-hapus', 'Dihapus');
        redirect('user', 'refresh');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail User';
        $data['user'] = $this->User_Model->getUserById($id);
        $this->load->view('user/detail', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit User';
        $data['user'] = $this->User_Model->getUserById($id);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/edit', $data);
        } else {
            $this->User_Model->ubahDataUser();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('user/listUser', 'refresh');
        }
    }

    public function listUser()
    {
        if ($this->session->userdata('level') == "user") {
            redirect('user', 'refresh');
        } elseif ($this->session->userdata('level') == "admin") {
            $data['title'] = 'Data Admin';
            $data['user'] = $this->User_Model->datatabels();
            $data['user'] = $this->User_Model->getAllUser();

            if ($this->input->post('keyword')) {
                $data['user'] = $this->User_Model->cariDataUser();
            }
            $this->load->view('user/list', $data);
        } else {
            redirect('auth', 'refresh');
        }
    }

    public function laporan_pdfUser() {
        
        $this->load->library('pdf');

        $data['user']= $this->Cetak_Model->viewUser();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datauser.pdf";
        $this->pdf->load_view('user/laporan', $data);
    }
}
