<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Model_user extends CI_Model {

    // Model Praktikum
	public function cari_praktikum($cari_kelas) {
        $this->db->where('kelas', $cari_kelas);
		return $this->db->get('jadwal_praktikum');
    }

    public function cari_hari($cari_kelas)
    {
        $this->db->select("*");
        $this->db->from('jadwal_praktikum'); 
        $this->db->where('kelas', $cari_kelas); 
        $query = $this->db->get();
        return $result=$query->row(); // mengembalikan satu row
    }

    // Akhir model Praktikum

    // Model Pengulangan
    public function cari_pengulangan($cari_pengulangan)
    {
        $this->db->where('npm', $cari_pengulangan);
        return $this->db->get('jadwal_pengulangan');
    }
    
    public function cari_npm($cari_pengulangan)
    {
        $this->db->select("*");
        $this->db->from('jadwal_pengulangan');
        $this->db->where('npm', $cari_pengulangan);
        $query = $this->db->get();
        return $result=$query->row();
    }

    // Akhir Model Pengulangan

    // Model Kalender Akademik
    public function kalender_akademik()
    {
        return $this->db->get('kalender_akademik');
    }

    public function berita_lfd()
    {
        return $this->db->get('berita');
    }

    function lihat_berita($where,$table)
    {      
        return $this->db->get_where($table,$where);
    }

    // akhir model kalender akademik

   
}