<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class obat_model extends CI_Model {

    public function getAllobat()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query = $this->db->get('obat');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdataobat()
    {
        $data=[
            "id_obat" => $this->input->post('id_obat',true), 
            "nama_obat" => $this->input->post('nama_obat',true),
            "jenis_obat" => $this->input->post('jenis_obat',true),
            "stok_obat" => $this->input->post('stok_obat',true)
        ];
        $this->db->insert('obat', $data);
    }

    public function hapusdataobat($id_obat){
        $this->db->where('id_obat', $id_obat);
        $this->db->delete('obat');
    }

    public function getobatByID($id_obat){
        return $this->db->get_where('obat',['id_obat'=> $id_obat])->row_array(); 
    }

    public function ubahdataobat(){
        $data=[
            "id_obat" => $this->input->post('id_obat',true), 
            "nama_obat" => $this->input->post('nama_obat',true),
            "jenis_obat" => $this->input->post('jenis_obat',true),
            "stok_obat" => $this->input->post('stok_obat',true)
        ];
        $this->db->where('id_obat',$this->input->post('id_obat'));
        $this->db->update('obat',$data);
    }

    public function cariDataobat(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_obat',$keyword);
        $this->db->or_like('nama_obat',$keyword);
        $this->db->or_like('jenis_obat',$keyword);
        $this->db->or_like('stok_obat',$keyword);
        return $this->db-> get('obat')->result_array();
    }

    public function datatabels() {
        $query= $this->db->order_by('id','DESC')->get('obat');
        return $query->result();
    }
}
/* End of file ModelName.php */


?>