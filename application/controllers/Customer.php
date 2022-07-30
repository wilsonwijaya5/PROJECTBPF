<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Customer";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['customer'] = $this->Customer_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("customer/vw_customer", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Customer";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Customer', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('telepon', 'No Telepon', 'required|integer', [
            'required' => 'No Telepon Wajib di isi',
            'integer' => 'No Telepon harus Angka'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("customer/vw_tambah_customer", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            ];

            $this->Customer_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
			Customer Berhasil Ditambah!</div>');
            redirect('Customer');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Customer";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['customer'] = $this->Customer_model->getById($id);

        $this->form_validation->set_rules('nama', 'Customer', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('telepon', 'No Telepon', 'required|integer', [
            'required' => 'No Telepon Wajib di isi',
            'integer' => 'No Telepon harus Angka'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("customer/vw_ubah_customer", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            ];
            $id = $this->input->post('id');
            $this->Customer_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Customer Berhasil
			Diubah!</div>');
            redirect('Customer');
        }
    }

    public function hapus($id)
    {
        $this->Customer_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Customer tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fas fa-check-circle"></i>Data Customer Berhasil Dihapus!</div>');
        }
        redirect('Customer');
    }
}
