<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Merk_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Merk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['merk'] = $this->Merk_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("merk/vw_merk", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Merk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Merk', 'required', [
            'required' => 'Merk Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("merk/vw_tambah_merk", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama')
            ];

            $this->Merk_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
			Merk Berhasil Ditambah!</div>');
            redirect('Merk');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Merk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['merk'] = $this->Merk_model->getById($id);

        $this->form_validation->set_rules('nama', 'Merk', 'required', [
            'required' => 'Merk Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("merk/vw_ubah_merk", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama')
            ];
            $id = $this->input->post('id');
            $this->Merk_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Merk Berhasil
			Diubah!</div>');
            redirect('Merk');
        }
    }

    public function hapus($id)
    {
        $this->Merk_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Merk tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fas fa-check-circle"></i>Data Merk Berhasil Dihapus!</div>');
        }
        redirect('Merk');
    }
}
