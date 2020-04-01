<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class dokter_model extends CI_Model {

    public function getAlldokter()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query = $this->db->get('dokter');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdatadokter()
    {
        $data=[
            "id_dok" => $this->input->post('id_dok',true), 
            "nama_dok" => $this->input->post('nama_dok',true),
            "alamat_dok" => $this->input->post('alamat_dok',true),
            "no_telp_dok" => $this->input->post('no_telp_dok',true),
            "spesialis_dok" => $this->input->post('spesialis_dok',true)
        ];
        $this->db->insert('dokter', $data);
    }

    public function hapusdatadokter($id_dok){
        $this->db->where('id_dok', $id_dok);
        $this->db->delete('dokter');
    }

    public function getdokterByID($id_dok){
        return $this->db->get_where('dokter',['id_dok'=> $id_dok])->row_array(); 
    }

    public function ubahdatadokter(){
        $data=[
            "id_dok" => $this->input->post('id_dok',true), 
            "nama_dok" => $this->input->post('nama_dok',true),
            "alamat_dok" => $this->input->post('alamat_dok',true),
            "no_telp_dok" => $this->input->post('no_telp_dok',true),
            "spesialis_dok" => $this->input->post('spesialis_dok',true)
        ];
        $this->db->where('id_dok',$this->input->post('id_dok'));
        $this->db->update('dokter',$data);
    }

    public function cariDatadokter(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_dok',$keyword);
        $this->db->or_like('nama_dok',$keyword);
        $this->db->or_like('alamat_dok',$keyword);
        $this->db->or_like('no_telp_dok',$keyword);
        $this->db->or_like('spesialis_dok',$keyword);
        return $this->db-> get('dokter')->result_array();
    }

    public function datatabels() {
        $query= $this->db->order_by('id_dok','DESC')->get('dokter');
        return $query->result();
    }
}
/* End of file ModelName.php */


?>