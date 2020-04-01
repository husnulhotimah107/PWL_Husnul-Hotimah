<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/rest-server-rs/api";
    }

    public function index()
    {
        $data['title'] = 'List Dokter';
        $result =  $this->curl->simple_get($this->API . '/dokter');
        $data['dokter'] = json_decode($result, true);
        $this->load->view('template/header',$data);
        $this->load->view('dokter/index', $data);
        $this->load->view('template/footer');
    }

    public function index_admin()
    {
        $data['title'] = 'List Dokter';
        $result =  $this->curl->simple_get($this->API . '/dokter');
        $data['dokter'] = json_decode($result, true);
        $this->load->view('template/header',$data);
        $this->load->view('dokter/index_admin', $data);
        $this->load->view('template/footer');
    }

    public function laporan_pdf() {
        
        $this->load->library('pdf');

        $data['dokter']= $this->Cetak_Model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datadokter.pdf";
        $this->pdf->load_view('dokter/laporan', $data);
    }

}

/* End of file Controllername.php */


?>