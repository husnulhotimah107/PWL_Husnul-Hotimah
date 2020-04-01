<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model extends CI_Model
{

    public function view()
    {
        $this->db->select('id_dok,nama_dok,alamat_dok,no_telp_dok,spesialis_dok');
        $query = $this->db->get('dokter');
        return $query->result();
    }

    public function viewperiksa()
    {
        $this->db->select('*');
        $this->db->from('periksa p');
        $this->db->join('user u', 'u.id_user = p.id_user');
        $this->db->join('dokter d', 'd.id_dok = p.id_dok');
        $query = $this->db->get();
        return $query->result();
    }

    public function viewObat()
    {
        $this->db->select('id_obat,nama_obat,jenis_obat,stok_obat');
        $query = $this->db->get('obat');
        return $query->result();
    }

    public function viewTransaksi()
    {
        $this->db->select('*');
        $this->db->from('transaksi t');
        $this->db->join('user u', 'u.id_user = t.id_user');
        $this->db->join('periksa p', 'p.id_periksa = t.id_periksa');
        $this->db->join('dokter d', 'd.id_dok = t.id_dok');
        $this->db->join('obat o', 'o.id_obat = t.id_obat');
        $query = $this->db->get();
        return $query->result();
    }

    public function viewUser()
    {
        $this->db->select('nama,username,email,password,level,status');
        $query = $this->db->get('user');
        return $query->result();
    }
}
