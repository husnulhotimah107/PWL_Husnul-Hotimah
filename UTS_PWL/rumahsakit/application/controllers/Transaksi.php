<?php

defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
{

    //fungsi yang akan dijalankan saat classnya diinstansiasi
    public function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model');
        $this->load->model('user_model');
        $this->load->model('periksa_model');
        $this->load->model('dokter_model');
        $this->load->model('obat_model');
        $this->load->model('cetak_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'List Transaksi';
        $data['transaksi'] = $this->transaksi_model->datatabels();

        $data['transaksi'] = $this->transaksi_model->getAlltransaksi();

        if ($this->input->post('keyword')) {
            #code...
            $data['transaksi'] = $this->transaksi_model->cariDatatransaksi();
        }

        $this->load->view('template/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer');
    }

    public function index_user()
    {
        $data['title'] = 'List Transaksi';
        $data['transaksi'] = $this->transaksi_model->datatabels();

        $data['transaksi'] = $this->transaksi_model->getAlltransaksi();

        if ($this->input->post('keyword')) {
            #code...
            $data['transaksi'] = $this->transaksi_model->cariDatatransaksi();
        }

        $this->load->view('template/header_user', $data);
        $this->load->view('transaksi/index_user', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Menambahkan Data Transaksi';

        //$this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'required');
        $data['user'] = $this->user_model->getAlluser();
        $data['periksa'] = $this->periksa_model->getAllperiksa();
        $data['dokter'] = $this->dokter_model->getAlldokter();
        $data['obat'] = $this->obat_model->getAllobat();
        $this->form_validation->set_rules('tgl_transaksi', 'tgl_transaksi', 'required');
        $this->form_validation->set_rules('biaya', 'biaya', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('transaksi/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->transaksi_model->tambahdatatransaksi();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('transaksi', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->transaksi_model->hapusdatatransaksi($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('transaksi', 'refresh');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Data Transaksi';
        $data['transaksi'] = $this->transaksi_model->gettransaksiByID($id);
        $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'required');
        $data['user'] = $this->user_model->getAlluser();
        $data['periksa'] = $this->periksa_model->getAllperiksa();
        $data['dokter'] = $this->dokter_model->getAlldokter();
        $data['obat'] = $this->obat_model->getAllobat();
        $this->form_validation->set_rules('tgl_transaksi', 'tgl_transaksi', 'required');
        $this->form_validation->set_rules('biaya', 'biaya', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('transaksi/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->transaksi_model->ubahdatatransaksi();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('transaksi', 'refresh');
        }
    }

    public function laporan_pdfTransaksi()
    {

        $this->load->library('pdf');

        $data['transaksi'] = $this->cetak_model->viewTransaksi();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datatransaksi.pdf";
        $this->pdf->load_view('transaksi/laporan', $data);
    }
}

/* End of file transaksi.php */
