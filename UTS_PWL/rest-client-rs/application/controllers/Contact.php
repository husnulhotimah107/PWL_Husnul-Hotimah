<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
         parent::__construct();
         $this->load->model('Contact_Model');
         $this->load->model('Cetak_Model');
         $this->load->helper('form');
         $this->load->library('form_validation');
    }


	public function index_admin()
	{
		$data['title']='Data contact';
        $data['contact']=$this->Contact_Model->getAllcontact();
        
        if($this->input->post('keyword')){
            #code...
            $data['contact']=$this->Contact_Model->cariDatacontact();
        }
        $this->load->view('template/header',$data);
        $this->load->view('contact/contact_admin', $data);
        $this->load->view('template/footer');
	}

    public function index()
    {

		$data['title']='Form Menambahkan Data contact';
        $this->form_validation->set_rules('nama_contact', 'nama_contact', 'required');
        $this->form_validation->set_rules('email_contact', 'email_contact', 'required');
        $this->form_validation->set_rules('pesan', 'pesan', 'required');
        
        if ($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('template/header',$data);
            $this->load->view('contact/contact', $data);
            $this->load->view('template/footer');
        } else{
            # code...
            $this->Contact_Model->tambahdatacontact();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('contact', 'refresh');
        }
    }


    public function hapus($id_contact){
        $this->Contact_Model->hapusdatacontact($id_contact);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('contact/index_admin','refresh');
    }

    public function laporan_pdfcontact() {
        
        $this->load->library('pdf');

        $data['contact']= $this->Cetak_Model->viewcontact();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datacontact.pdf";
        $this->pdf->load_view('contact/laporan', $data);
    }


}
