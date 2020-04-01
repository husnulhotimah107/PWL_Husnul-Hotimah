<?php

defined('BASEPATH') or exit('No direct script access allowed');

class periksa_model extends CI_Model
{

    public function getAllperiksa()
    {
        $this->db->select('*');
        $this->db->from('periksa p');
        $this->db->join('user u', 'u.id_user = p.id_user');
        $this->db->join('dokter d', 'd.id_dok = p.id_dok');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPeriksaUser()
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('periksa p');
        $this->db->join('user u', 'u.id_user = p.id_user');
        $this->db->join('dokter d', 'd.id_dok = p.id_dok');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahdataperiksa()
    {
        $data = [
            "id_periksa" => $this->input->post('id_periksa', true),
            "id_user" => $this->input->post('id_user', true),
            "id_dok" => $this->input->post('id_dok', true),
            "keluhan" => $this->input->post('keluhan', true),
            "tglperiksa" => $this->input->post('tglperiksa', true)
        ];
        $this->db->insert('periksa', $data);
    }

    public function hapusdataperiksa($id_periksa)
    {
        $this->db->where('id_periksa', $id_periksa);
        $this->db->delete('periksa');
    }

    public function getperiksaByID($id_periksa)
    {
        return $this->db->get_where('periksa', ['id_periksa' => $id_periksa])->row_array();
    }


    public function ubahdataperiksa()
    {
        $data = [
            "id_periksa" => $this->input->post('id_periksa', true),
            "id_user" => $this->input->post('id_user', true),
            "id_dok" => $this->input->post('id_dok', true),
            "keluhan" => $this->input->post('keluhan', true),
            "tglperiksa" => $this->input->post('tglperiksa', true)
        ];
        $this->db->where('id_periksa', $this->input->post('id_periksa'));
        $this->db->update('periksa', $data);
    }

    public function cariDataperiksa()
    {
        $keyword = $this->input->post('keyword');
        $this->db->select('*');
        $this->db->from('periksa p');
        $this->db->join('user u', 'u.id_user = p.id_user');
        $this->db->join('dokter d', 'd.id_dok = p.id_dok');
        $this->db->like('p.id_periksa', $keyword);
        $this->db->or_like('p.id_user', $keyword);
        $this->db->or_like('p.id_dok', $keyword);
        $this->db->or_like('p.keluhan', $keyword);
        $this->db->or_like('p.tglperiksa', $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function datatabels()
    {
        $query = $this->db->order_by('id_periksa', 'DESC')->get('periksa');
        return $query->result();
    }
}
/* End of file ModelName.php */
