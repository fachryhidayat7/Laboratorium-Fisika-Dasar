<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Model_admin extends CI_Model {

    // Model Jadwal Praktikum
    public function lihat_praktikum()
    {
        return $this->db->get('jadwal_praktikum');
    }

    public function save_praktikum($npm,$kelas,$nama,$kelompok,$m1,$m2,$m3,$m4,$m5,$hari,$shift)
    {
        $data = array (
            'npm' => $npm,
            'kelas' => $kelas,
            'nama' => $nama,
            'kelompok' => $kelompok,
            'm1' => $m1,
            'm2' => $m2,
            'm3' => $m3,
            'm4' => $m4,
            'm5' => $m5,
            'hari' => $hari,
            'shift' => $shift

        );

        $this->db->insert('jadwal_praktikum',$data);
    }

    public function update_praktikum($where,$data,$table)
    {
        $this->db->where($where);
		$this->db->update($table,$data);
    }

    public function delete_praktikum($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Akhir Model Jadwal Praktikum

    // Model Jadwal Pengulangan
    public function lihat_pengulangan()
    {
        return $this->db->get('jadwal_pengulangan');
    }

    public function save_pengulangan($npm,$kelas,$nama,$kelompok,$modul,$shift,$tanggal)
        {
            $data = array (
                'npm' => $npm,
                'kelas' => $kelas,
                'nama' => $nama,
                'kelompok' => $kelompok,
                'modul_ulang' => $modul,
                'shift' => $shift,
                'tgl_ulang' => $tanggal

            );

            $this->db->insert('jadwal_pengulangan',$data);
        }


    public function update_pengulangan($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data); 
    }

    public function delete_pengulangan($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Akhir Model Jadwal Pengulangan

    // Model Kaleder Akadmik
    public function lihat_kalender()
    {
        return $this->db->get('kalender_akademik');
    }

    public function save_kalender($kegiatan,$tanggal)
    {
        $data = array (
                'kegiatan' => $kegiatan,
                'tanggal_kegiatan' => $tanggal

            );

            $this->db->insert('kalender_akademik',$data);
    }

    public function update_kalender($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data); 
    }

    public function delete_kalender($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // akhir model kalender

    // awal model berita
    
    public function berita_lfd(){
        return $this->db->get('berita');
    }

    public function save_berita($judul,$isi,$tanggal)
    {
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'tanggal' =>$tanggal
        );

        $this->db->insert('berita', $data);
    }

    public function update_berita($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function delete_berita($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // akhir model berita

    
}