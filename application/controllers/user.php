<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}

	public function index()
	{
		$data['data'] = $this->model_user->berita_lfd();
		$this->load->view('template/header');
		$this->load->view('user/index',$data);
	}



// Jadwal Praktikum
	public function jadwal_praktikum(){
		$this->load->view('template/header2');
		$this->load->view('user/jadwalpraktikum');
	}

	public function jadwal_praktikum_table()
	{
		$cari_kelas = $this->input->post('cari_kelas');
		$data ['cari'] = $this->model_user->cari_praktikum($cari_kelas);
		$data['cari_hari'] = $this->model_user->cari_hari($cari_kelas);
		$this->load->view('template/header2');
		$this->load->view('user/jadwalpraktikumtable',$data);

		
	}
// Akhir Jadwal Praktikum

// Jadwal Pengulangan
	public function jadwal_pengulangan()
	{
		$this->load->view('template/header2');
		$this->load->view('user/jadwalpengulangan');
	}

	public function jadwal_pengulangan_table()
	{
		$cari_pengulangan = $this->input->post('cari_pengulangan');
		$data ['cari'] = $this->model_user->cari_pengulangan($cari_pengulangan);
		$data ['cari_npm'] = $this->model_user->cari_npm($cari_pengulangan);
		$this->load->view('template/header2');
		$this->load->view('user/jadwalpengulangantable',$data);
	}
// Akhir Jadwal Pengulangan

// Kalender Akademik
	public function kalender_akademik()
	{
		$data ['kalender'] = $this->model_user->kalender_akademik();
		$this->load->view('template/header2');
		$this->load->view('user/kalenderakademik',$data);
	}


// Akhir Kalender Akademik

// Tata Tertib Praktikum

	public function tata_tertib()
	{
		$this->load->view('template/header2');
		$this->load->view('user/tatatertib');
	}

// Struktur Organisasi

	public function struktur_organisasi()
	{
		$this->load->view('template/header2');
		$this->load->view('user/strukturorganisasi');
	}

// Akhir Struktur Organisasi

// Gambaran Umum

	public function gambaran_umum()
	{
		$this->load->view('template/header2');
		$this->load->view('user/gambaranumum');
	}
// Akhir Struktur Organisasi

// Visi dan Misi

	public function visi_misi()
	{
		$this->load->view('template/header2');
		$this->load->view('user/visimisi');
	}

// Akhir Visi Misi

// Fasilitas

	public function fasilitas()
	{
		$this->load->view('template/header2');
		$this->load->view('user/fasilitas');
	}

// Akhir Fasilitas

// Download Modul

	public function download_modul()
		{
			$this->load->view('template/header2');
			$this->load->view('user/download_modul');
		}

// Akhir Donwload Modul

// LFD News
	public function lfd_news($id)
	{
		$where = array ('id' => $id);
		$data['data'] = $this->model_user->lihat_berita($where, 'berita')->result();
		$this->load->view('template/header2');
		$this->load->view('user/lfdnews',$data);

	}

// akhiir lfd news

}