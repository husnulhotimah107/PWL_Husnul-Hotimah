<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('dasboard/dasboard');
	}

	
    // // insert data dokter
    // function create(){
    //     if(isset($_POST['submit'])){
    //         $data = array(
    //             "id_dok" => $this->input->post('id_dok'), 
    //             "nama_dok" => $this->input->post('nama_dok'),
    //             "alamat_dok" => $this->input->post('alamat_dok'),
    //             "no_telp_dok" => $this->input->post('no_telp_dok'),
    //             "spesialis_dok" => $this->input->post('spesialis_dok'));
    //         $insert =  $this->curl->simple_post($this->API.'/dokter', $data, array(CURLOPT_BUFFERSIZE => 10)); 
    //         if($insert)
    //         {
    //             $this->session->set_flashdata('hasil','Insert Data Berhasil');
    //         }else
    //         {
    //            $this->session->set_flashdata('hasil','Insert Data Gagal');
    //         }
    //         redirect('dokter');
    //     }else{
    //         $this->load->view('dokter/create');
    //     }
    // }

    // // edit data dokter
    // function edit(){
    //     if(isset($_POST['submit'])){
    //         $data = array(
    //             "id_dok" => $this->input->post('id_dok'), 
    //             "nama_dok" => $this->input->post('nama_dok'),
    //             "alamat_dok" => $this->input->post('alamat_dok'),
    //             "no_telp_dok" => $this->input->post('no_telp_dok'),
    //             "spesialis_dok" => $this->input->post('spesialis_dok'));
    //         $update =  $this->curl->simple_put($this->API.'/dokter', $data, array(CURLOPT_BUFFERSIZE => 10)); 
    //         if($update)
    //         {
    //             $this->session->set_flashdata('hasil','Update Data Berhasil');
    //         }else
    //         {
    //            $this->session->set_flashdata('hasil','Update Data Gagal');
    //         }
    //         redirect('dokter');
    //     }else{
    //         $params = array('id_dok'=>  $this->uri->segment(3));
    //         $data['dokter'] = json_decode($this->curl->simple_get($this->API.'/dokter',$params));
    //         $this->load->view('dokter/edit',$data);
    //     }
    // }

    // // delete data dokter
    // function delete($id_dok){
    //     if(empty($id_dok)){
    //         redirect('dokter');
    //     }else{
    //         $delete =  $this->curl->simple_delete($this->API.'/dokter', array('id_dok'=>$id_dok), array(CURLOPT_BUFFERSIZE => 10)); 
    //         if($delete)
    //         {
    //             $this->session->set_flashdata('hasil','Delete Data Berhasil');
    //         }else
    //         {
    //            $this->session->set_flashdata('hasil','Delete Data Gagal');
    //         }
    //         redirect('dokter');
    //     }
    // }

}
