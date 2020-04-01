<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->helper('url');
         $this->load->helper('form');
         $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
      
        $this->load->view('template/header', $data);
        $this->load->view('about/about', $data);
        $this->load->view('template/footer', $data);
    }
}

/* End of file Controllername.php */


?>