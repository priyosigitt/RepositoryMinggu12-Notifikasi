<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function insert_data()
	{
		$kata = $this->input->post('kata');
		if ($kata == null) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">
			&times;</a>
			Teks yang anda isi kosong
			</div>');
			$this->load->view('welcome_message');
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert"
			aria-label="close">&times;</a>
			<p>Anda berhasil input kata ' . $kata . '.</p>
			</div>');
			$this->load->view('welcome_message');
		};
	}
}
