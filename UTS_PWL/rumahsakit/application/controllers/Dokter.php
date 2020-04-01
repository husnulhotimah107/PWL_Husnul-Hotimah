<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->helper('url');
         $this->load->helper('form');
         $this->load->library('form_validation');
         $this->load->model('dokter_model');
         $this->load->model('cetak_model');
    }

    public function index()
    {
        $data['title'] = 'List Dokter';
        $data['dokter'] = $this->dokter_model->datatabels();
     
        $data['dokter']=$this->dokter_model->getAlldokter();
      
        $this->load->view('template/header', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('template/footer');
    }

    public function index_user()
    {
        $data['title'] = 'List Dokter';
        $data['dokter'] = $this->dokter_model->datatabels();
     
        $data['dokter']=$this->dokter_model->getAlldokter();
      
        $this->load->view('template/header_user', $data);
        $this->load->view('dokter/index_user', $data);
        $this->load->view('template/footer');
    }
    
    public function tambah(){
        $data['title']='Form Menambahkan Data Dokter';
        $this->form_validation->set_rules('nama_dok', 'nama_dok', 'required');
        $this->form_validation->set_rules('alamat_dok', 'alamat_dok', 'required');
        $this->form_validation->set_rules('no_telp_dok', 'no_telp_dok', 'required');
        $this->form_validation->set_rules('spesialis_dok', 'spesialis_dok', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('dokter/tambah', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->dokter_model->tambahdatadokter();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('dokter', 'refresh');
        }
        
    }

    public function hapus($id_dok){
        $this->dokter_model->hapusdatadokter($id_dok);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('dokter','refresh');
    }

    public function detail_user($id_dok){
        $data['title']='Detail Dokter';
        $data['dokter']=$this->dokter_model->getdokterByID($id_dok);
        $this->load->view('template/header_user', $data);
        $this->load->view('dokter/detail_user', $data);
        $this->load->view('template/footer');
    }

    public function edit($id_dok){
        $data['title']='Form Edit Data Dokter';
        $data['dokter']=$this->dokter_model->getdokterByID($id_dok);
        
        $this->form_validation->set_rules('nama_dok', 'nama_dok', 'required');
        $this->form_validation->set_rules('alamat_dok', 'alamat_dok', 'required');
        $this->form_validation->set_rules('no_telp_dok', 'no_telp_dok', 'required');
        $this->form_validation->set_rules('spesialis_dok', 'spesialis_dok', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('dokter/edit', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->dokter_model->ubahdatadokter();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('dokter', 'refresh');
        }
    }

    public function laporan_pdf() {
        
        $this->load->library('pdf');

        $data['dokter']= $this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datadokter.pdf";
        $this->pdf->load_view('dokter/laporan', $data);
    }

}

/* End of file Controllername.php */
