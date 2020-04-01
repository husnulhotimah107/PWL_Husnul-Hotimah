<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class obat extends CI_Controller {

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/rest-server-rs/api";
    }

    public function index()
    {
        $data['title'] = 'List Obat';
        $result =  $this->curl->simple_get($this->API . '/obat');
        $data['obat'] = json_decode($result, true);
        $this->load->view('template/header',$data);
        $this->load->view('obat/index', $data);
        $this->load->view('template/footer');
    }

    public function index_admin()
    {
        $data['title'] = 'List Obat';
        $result =  $this->curl->simple_get($this->API . '/obat');
        $data['obat'] = json_decode($result, true);
        $this->load->view('template/header',$data);
        $this->load->view('obat/index_admin', $data);
        $this->load->view('template/footer');
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


?>