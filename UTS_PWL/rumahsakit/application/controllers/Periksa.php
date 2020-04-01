<?php

defined('BASEPATH') or exit('No direct script access allowed');

class periksa extends CI_Controller
{

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('periksa_model');
        $this->load->model('dokter_model');
        $this->load->model('cetak_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'List Periksa';
        $data['periksa'] = $this->periksa_model->datatabels();

        $data['periksa'] = $this->periksa_model->getAllperiksa();

        if ($this->input->post('keyword')) {
            #code...
            $data['periksa'] = $this->periksa_model->cariDataperiksa();
        }

        $this->load->view('template/header', $data);
        $this->load->view('periksa/index', $data);
        $this->load->view('template/footer');
    }

    public function index_user()
    {
        $data['title'] = 'List Periksa';
        $data['periksa'] = $this->periksa_model->datatabels();

        $data['periksa'] = $this->periksa_model->getPeriksaUser();

        if ($this->input->post('keyword')) {
            #code...
            $data['periksa'] = $this->periksa_model->cariDataperiksa();
        }

        $this->load->view('template/header_user', $data);
        $this->load->view('periksa/index_user', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Menambahkan Data periksa';

        $data['user'] = $this->user_model->getAlluser();
        $data['dokter'] = $this->dokter_model->getAlldokter();
        $this->form_validation->set_rules('keluhan', 'keluhan', 'required');
        $this->form_validation->set_rules('tglperiksa', 'tglperiksa', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('periksa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->periksa_model->tambahdataperiksa();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('periksa', 'refresh');
        }
    }

    public function hapus($id_periksa)
    {
        $this->periksa_model->hapusdataperiksa($id_periksa);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('periksa', 'refresh');
    }

    public function edit($id_periksa)
    {
        $data['title'] = 'Form Edit Data periksa';
        $data['periksa'] = $this->periksa_model->getperiksaByID($id_periksa);
        $this->form_validation->set_rules('id_periksa', 'id_periksa', 'required');
        $data['user'] = $this->user_model->getAlluser();
        $data['dokter'] = $this->dokter_model->getAlldokter();
        $this->form_validation->set_rules('keluhan', 'keluhan', 'required');
        $this->form_validation->set_rules('tglperiksa', 'tglperiksa', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('periksa/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->periksa_model->ubahdataperiksa();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('periksa', 'refresh');
        }
    }

    public function laporan_pdfperiksa()
    {

        $this->load->library('pdf');

        $data['periksa'] = $this->cetak_model->viewperiksa();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "dataperiksa.pdf";
        $this->pdf->load_view('periksa/laporan', $data);
    }
}

/* End of file periksa.php */
