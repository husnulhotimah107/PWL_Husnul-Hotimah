<?php

defined('BASEPATH') or exit('No direct script access allowed');

class transaksi_model extends CI_Model
{

    public function getAlltransaksi()
    {
        $this->db->select('*');
        $this->db->from('transaksi t');
        $this->db->join('user u', 'u.id_user = t.id_user');
        $this->db->join('periksa p', 'p.id_periksa = t.id_periksa');
        $this->db->join('dokter d', 'd.id_dok = t.id_dok');
        $this->db->join('obat o', 'o.id_obat = t.id_obat');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTransaksiUser($id_user)
    {
        $this->db->distinct();
        $this->db->select('*');
        $this->db->from('transaksi t');
        $this->db->join('user u', 'u.id_user = t.id_user');
        $this->db->join('periksa p', 'p.id_periksa = t.id_periksa');
        $this->db->join('dokter d', 'd.id_dok = t.id_dok');
        $this->db->join('obat o', 'o.id_obat = t.id_obat');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahdatatransaksi()
    {
        $data = [
            "id_transaksi" => $this->input->post('id_transaksi', true),
            "id_user" => $this->input->post('id_user', true),
            "id_periksa" => $this->input->post('id_periksa', true),
            "id_dok" => $this->input->post('id_dok', true),
            "id_obat" => $this->input->post('id_obat', true),
            "biaya" => $this->input->post('biaya', true),
            "tgl_transaksi" => $this->input->post('tgl_transaksi', true)
        ];
        $this->db->insert('transaksi', $data);

        $query = 'update obat set stok_obat = stok_obat - ' . (int) 1 . ' where id_obat = ' . $this->input->post('id_obat');
        $this->db->query($query);
    }

    public function hapusdatatransaksi($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('transaksi');
    }

    public function gettransaksiByID($id)
    {
        return $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
    }

    public function getuserByID($id_user)
    {
        return $this->db->get_where('transaksi', ['id_user' => $id_user])->row_array();
    }

    public function ubahdatatransaksi()
    {
        $data = [

            "id_periksa" => $this->input->post('id_periksa', true),
            "id_dok" => $this->input->post('id_dok', true),
            "id_obat" => $this->input->post('id_obat', true),
            "biaya" => $this->input->post('biaya', true),
            "tgl_transaksi" => $this->input->post('tgl_transaksi', true)
        ];
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('transaksi', $data);

        $query = 'update obat set stok_obat = stok_obat - ' . (int) 1 . ' where id_obat = ' . $this->input->post('id_obat');
        $this->db->query($query);
    }

    public function cariDatatransaksi()
    {
        $keyword = $this->input->post('keyword');
        $this->db->select('*');
        $this->db->from('transaksi t');
        $this->db->join('user u', 'u.id_user = t.id_user');
        $this->db->join('periksa p', 'p.id_periksa = t.id_periksa');
        $this->db->join('dokter d', 'd.id_dok = t.id_dok');
        $this->db->join('obat o', 'o.id_obat = t.id_obat');
        $this->db->like('id_transaksi', $keyword);
        $this->db->or_like('t.id_periksa', $keyword);
        $this->db->or_like('t.id_dok', $keyword);
        $this->db->or_like('u.nama', $keyword);
        $this->db->or_like('d.nama_dok', $keyword);
        $this->db->or_like('t.id_obat', $keyword);
        $this->db->or_like('t.biaya', $keyword);
        $this->db->or_like('t.tgl_transaksi', $keyword);
        $query = $this->db->get();
        return $query->result_array();

        // return $this->db-> get('transaksi')->result_array();
    }

    public function datatabels()
    {
        $query = $this->db->order_by('id_transaksi', 'DESC')->get('transaksi');
        return $query->result();
    }
}
/* End of file ModelName.php */
