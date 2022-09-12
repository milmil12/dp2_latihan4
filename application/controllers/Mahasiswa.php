<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}
	
	public function index() {
		
        $this->data['title']='Mahasiswa';
		$this->data['mahasiswa']=$this->mahasiswa_model->getDataMahasiswa();
		
		$this->load->view('mahasiswa/mahasiswa_list', $this->data);
	}

	public function add(){
		$this->data['title'] = 'Tambah Mahasiswa';
		$this->load->view('mahasiswa/mahasiswa_add', $this->data);
	}
	
    public function add_save(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'foto_profil' => $this->input->post('foto_profil'),
			'alamat' => $this->input->post('alamat')
		);

		$simpan = $this->mahasiswa_model->simpanData($data);

		if($simpan){
			redirect('mahasiswa');
		}
	}

	public function edit($id_mhs){
		$this->data['title'] = 'Edit Data';
		$this->data['mahasiswa'] = $this->mahasiswa_model->findData($id_mhs);

		$this->load->view('mahasiswa/mahasiswa_edit',$this->data);
	}

	public function edit_save(){

		$id_mhs = $this->input->post("id_mhs");
		$data = array(
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email'),
			'jurusan' => $this->input->post('jurusan'),
			'foto_profil' => $this->input->post('foto_profil'),
			'alamat' => $this->input->post('alamat')
		);

		$update = $this->mahasiswa_model->updateData($data,$id_mhs);

		if($update){
			redirect('mahasiswa');
		}
	}

	public function hapus($id_mhs){
		$del=$this->mahasiswa_model->deleteData($id_mhs);
		if($del){
			redirect('mahasiswa');
		}
	}
}
?>