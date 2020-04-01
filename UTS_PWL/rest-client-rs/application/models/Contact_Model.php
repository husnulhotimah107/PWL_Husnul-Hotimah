<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class contact_model extends CI_Model {

    public function getAllcontact()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query = $this->db->get('contact');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdatacontact()
    {
        $data=[
            "id_contact" => $this->input->post('id_contact',true), 
            "nama_contact" => $this->input->post('nama_contact',true),
            "email_contact" => $this->input->post('email_contact',true),
            "pesan" => $this->input->post('pesan',true)
        ];
        $this->db->insert('contact', $data);
    }

    public function hapusdatacontact($id_contact){
        $this->db->where('id_contact', $id_contact);
        $this->db->delete('contact');
    }

    public function getcontactByID($id_contact){
        return $this->db->get_where('contact',['id_contact'=> $id_contact])->row_array(); 
    }

    public function ubahdatacontact(){
        $data=[
            "id_contact" => $this->input->post('id_contact',true), 
            "nama_contact" => $this->input->post('nama_contact',true),
            "email_contact" => $this->input->post('email_contact',true),
            "pesan" => $this->input->post('pesan',true)
        ];
        $this->db->where('id_contact',$this->input->post('id_contact'));
        $this->db->update('contact',$data);
    }

    public function cariDatacontact(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_contact',$keyword);
        $this->db->or_like('nama_contact',$keyword);
        $this->db->or_like('email_contact',$keyword);
        $this->db->or_like('pesan',$keyword);
        return $this->db-> get('contact')->result_array();
    }

    public function datatabels() {
        $query= $this->db->order_by('id','DESC')->get('contact');
        return $query->result();
    }
}
/* End of file ModelName.php */


?>