S<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->library('session');
		if($this->session->userdata('status')!="login"){
			redirect(base_url('login'));}
	}

	// Berita

	public function index()
	{	
		$data['data'] = $this->model_admin->berita_lfd();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/index',$data);
		$this->load->view('admin/template/footer');
	}

	public function berita_lfd()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');

		$this->model_admin->save_berita($judul,$isi,$tanggal);
		redirect(base_url('admin'));
	}

	public function ubah_berita()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');

		$data = array (
				'id' => $id,
                'judul' => $judul,
                'isi' => $isi,
                'tanggal' => $tanggal

            );

		$where = array(
			'id' => $id
		);

		$this->model_admin->update_berita($where,$data,'berita');
		redirect(base_url('admin'));
	}

	public function hapus_berita($id)
	{
		$where = array('id' => $id);
		$this->model_admin->delete_berita($where,'berita');
		redirect(base_url('admin'));
	}

	//akhir berita

	// Jadwal Praktikum
	public function jadwal_praktikum()
	{	
		$data['data'] = $this->model_admin->lihat_praktikum();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/jadwal_praktikum',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambah_praktikum()
	{
		$npm = $this->input->post('npm');
		$kelas = $this->input->post('kelas');
		$nama = $this->input->post('nama');
		$kelompok = $this->input->post('kelompok');
		$m1 = $this->input->post('m1');
		$m2 = $this->input->post('m2');
		$m3 = $this->input->post('m3');
		$m4 = $this->input->post('m4');
		$m5 = $this->input->post('m5');
		$hari = $this->input->post('hari');
		$shift = $this->input->post('shift');

		$this->model_admin->save_praktikum($npm,$kelas,$nama,$kelompok,$m1,$m2,$m3,$m4,$m5,$hari,$shift);
		redirect(base_url('admin/jadwal_praktikum'));
	}

	public function ubah_praktikum()
	{
		$npm = $this->input->post('npm');
		$kelas = $this->input->post('kelas');
		$nama = $this->input->post('nama');
		$kelompok = $this->input->post('kelompok');
		$m1 = $this->input->post('m1');
		$m2 = $this->input->post('m2');
		$m3 = $this->input->post('m3');
		$m4 = $this->input->post('m4');
		$m5 = $this->input->post('m5');
		$hari = $this->input->post('hari');
		$shift = $this->input->post('shift');

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
		
		$where = array(
			'npm' => $npm
		);

		$this->model_admin->update_praktikum($where,$data,'jadwal_praktikum');
		redirect('admin/jadwal_praktikum');
	}

	public function hapus_praktikum($npm){
		$where = array('npm' => $npm);
		$this->model_admin->delete_praktikum($where,'jadwal_praktikum');
		redirect('admin/jadwal_praktikum');
	}



	// Akhir Jadwal Praktikum

	// Jadwal Pengulangan

	public function jadwal_pengulangan()
	{
		$data['data'] = $this->model_admin->lihat_pengulangan();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/jadwal_pengulangan',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambah_pengulangan()
	{

		$npm = $this->input->post('npm');
		$kelas = $this->input->post('kelas');
		$nama = $this->input->post('nama');
		$kelompok = $this->input->post('kelompok');
		$modul = $this->input->post('modul_ulang');
		$shift = $this->input->post('shift');
		$tanggal = $this->input->post('tgl_ulang');

		$this->model_admin->save_pengulangan($npm,$kelas,$nama,$kelompok,$modul,$shift,$tanggal);
		redirect(base_url('admin/jadwal_pengulangan'));
	}

	public function ubah_pengulangan()
	{
		$npm = $this->input->post('npm');
		$kelas = $this->input->post('kelas');
		$nama = $this->input->post('nama');
		$kelompok = $this->input->post('kelompok');
		$modul = $this->input->post('modul_ulang');
		$shift = $this->input->post('shift');
		$tanggal = $this->input->post('tgl_ulang');

		$data = array (
            'npm' => $npm,
            'kelas' => $kelas,
            'nama' => $nama,
            'kelompok' => $kelompok,
            'modul_ulang' => $modul,
            'shift' => $shift,
            'tgl_ulang' => $tanggal

        );

        $where = array(
			'npm' => $npm
		);

		$this->model_admin->update_pengulangan($where,$data,'jadwal_pengulangan');
		redirect('admin/jadwal_pengulangan');
	}

	public function hapus_pengulangan($npm){
		$where = array('npm' => $npm);
		$this->model_admin->delete_pengulangan($where,'jadwal_pengulangan');
		redirect('admin/jadwal_pengulangan');
	}

	// akhir jadwal pengulangan
	

	// awal kalender akademik
	public function jadwal_kalender()
	{
		$data['data'] = $this->model_admin->lihat_kalender();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/kalender_akademik',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambah_kalender()
	{
		$kegiatan = $this->input->post('kegiatan');
		$tanggal = $this->input->post('tanggal_kegiatan');

		$this->model_admin->save_kalender($kegiatan,$tanggal);
		redirect(base_url('admin/jadwal_kalender'));
	}

	public function ubah_kalender()
	{
		$id_kalender = $this->input->post('id_kalender');
		$kegiatan = $this->input->post('kegiatan');
		$tanggal = $this->input->post('tanggal_kegiatan');

		$data = array (
				'id_kalender' => $id_kalender,
                'kegiatan' => $kegiatan,
                'tanggal_kegiatan' => $tanggal

            );

		$where = array(
			'id_kalender' => $id_kalender
		);

		$this->model_admin->update_kalender($where,$data,'kalender_akademik');
		redirect('admin/jadwal_kalender');
	}

	public function hapus_kalender($kalender)
	{
		$where = array('id_kalender' => $kalender);
		$this->model_admin->delete_kalender($where,'kalender_akademik');
		redirect('admin/jadwal_kalender');
	}


	function logout(){
		$this->session->sess_destroy();
		$this->load->view('admin/login');
	}
}