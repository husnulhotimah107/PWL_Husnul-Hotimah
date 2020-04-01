<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class obat extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('obat_model');
         $this->load->model('cetak_model');
         $this->load->helper('form');
         $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']='Data Obat';
        $data['obat']=$this->obat_model->getAllobat();
        
        if($this->input->post('keyword')){
            #code...
            $data['obat']=$this->obat_model->cariDataobat();
        }
        
        $this->load->view('template/header', $data);
        $this->load->view('obat/index', $data);
        $this->load->view('template/footer');
    }

    public function index_user()
    {
        $data['title']='Data Obat';
        $data['obat']=$this->obat_model->getAllobat();
        
        if($this->input->post('keyword')){
            #code...
            $data['obat']=$this->obat_model->cariDataobat();
        }
        
        $this->load->view('template/header_user', $data);
        $this->load->view('obat/index_user', $data);
        $this->load->view('template/footer');
    }


    public function tambah(){
        $data['title']='Form Menambahkan Data Obat';
        $this->form_validation->set_rules('nama_obat', 'nama_obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'jenis_obat', 'required');
        $this->form_validation->set_rules('stok_obat', 'stok_obat', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('obat/tambah', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->obat_model->tambahdataobat();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('obat', 'refresh');
        }
        
    }

    public function hapus($id_obat){
        $this->obat_model->hapusdataobat($id_obat);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('obat','refresh');
    }

    public function edit($id_obat){
        $data['title']='Form Edit Data Obat';
        $data['obat']=$this->obat_model->getobatByID($id_obat);
        
        $this->form_validation->set_rules('nama_obat', 'nama_obat', 'required');
        $this->form_validation->set_rules('jenis_obat', 'jenis_obat', 'required');
        $this->form_validation->set_rules('stok_obat', 'stok_obat', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('obat/edit', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->obat_model->ubahdataobat();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('obat', 'refresh');
        }
    }

    public function laporan_pdfObat() {
        
        $this->load->library('pdf');

        $data['obat']= $this->cetak_model->viewObat();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "dataobat.pdf";
        $this->pdf->load_view('obat/laporan', $data);
    }

}

/* End of file Controllername.php */
