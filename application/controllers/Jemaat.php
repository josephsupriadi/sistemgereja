<?php

class Jemaat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelJemaat");
	}

	public function index()
	{
		$dataJemaat = $this->ModelJemaat->getAll();
		$data = array(
			"jemaats" => $dataJemaat
		);
		$this->load->view('content/jemaat/v_list_jemaat', $data);
	}

	//untuk me load tampilan form tambah jemaat
	public function tambah()
	{
		$this->load->view("content/jemaat/v_add_jemaat");
	}

	public function insert()
	{
		$data = array(
			"nomor_keluarga" => $this->input->post("nomor_keluarga"),
			"nama_jemaat" => $this->input->post("nama_jemaat"),
			"tempat_lahir_jemaat" => $this->input->post("tempat_lahir_jemaat"),
			"tanggal_lahir_jemaat" => $this->input->post("tanggal_lahir_jemaat"),
			"jenis_kelamin_jemaat" => $this->input->post("jenis_kelamin_jemaat"),
			"alamat_jemaat" => $this->input->post("alamat_jemaat"),
			"pekerjaan_jemaat" => $this->input->post("pekerjaan_jemaat")
		);
		$id = $this->ModelJemaat->insertGetId($data);
		redirect('jemaat');
	}

	public function ubah($id)
	{
		$jemaat = $this->ModelJemaat->getByPrimaryKey($id);
		$data = array (
			"jemaat" => $jemaat,
		);
		$this->load->view('content/jemaat/v_update_jemaat', $data);
	}

	public function update()
	{
		$id = $this->input->post('id_jemaat');
		$data = array (
			"nomor_keluarga" => $this->input->post("nomor_keluarga"),
			"nama_jemaat" => $this->input->post("nama_jemaat"),
			"tempat_lahir_jemaat" => $this->input->post("tempat_lahir_jemaat"),
			"tanggal_lahir_jemaat" => $this->input->post("tanggal_lahir_jemaat"),
			"jenis_kelamin_jemaat" => $this->input->post("jenis_kelamin_jemaat"),
			"alamat_jemaat" => $this->input->post("alamat_jemaat"),
			"pekerjaan_jemaat" => $this->input->post("pekerjaan_jemaat")
		);
		$this->ModelJemaat->update($id, $data);
		redirect('jemaat');
	}

	public function delete()
	{
		$id = $this->input->post('id_jemaat');
		$this->ModelJemaat->delete($id);
		redirect('jemaat');
	}
}
