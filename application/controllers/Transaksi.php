<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('Alatberat_model');
        $this->load->model('Customer_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("transaksi/vw_transaksi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alatberat'] = $this->Alatberat_model->get();
        $data['customer'] = $this->Customer_model->get();
        $this->form_validation->set_rules('customer', 'Customer', 'required', [
            'required' => 'Customer Wajib di isi'
        ]);
        $this->form_validation->set_rules('alatberat', 'Alat Berat', 'required', [
            'required' => 'Alat Berat Wajib di isi'
        ]);
        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Peminjaman', 'required', [
            'required' => 'Tanggal Peminjaman Wajib di isi'
        ]);
        $this->form_validation->set_rules('tgl_kembali', 'Tanggal Pengembalian', 'required', [
            'required' => 'Tanggal Pengembalian Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga Wajib di isi',
            'integer' => 'Harga harus Angka'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("transaksi/vw_tambah_transaksi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'customer' => $this->input->post('customer'),
                'alatberat' => $this->input->post('alatberat'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status')
            ];
            $this->Transaksi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Transaksi Berhasil Ditambah!</div>');
            redirect('Transaksi');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Transaksi";
        $data['customer'] = $this->Customer_model->get();
        $data['alatberat'] = $this->Alatberat_model->get();
        $data['transaksi'] = $this->Transaksi_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('tgl_pinjam', 'Tanggal Peminjaman', 'required', [
            'required' => 'Tanggal Peminjaman Wajib di isi'
        ]);
        $this->form_validation->set_rules('tgl_kembali', 'Tanggal Pengembalian', 'required', [
            'required' => 'Tanggal Pengembalian Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga Wajib di isi',
            'integer' => 'Harga harus Angka'
        ]);
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("transaksi/vw_ubah_transaksi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'customer' => $this->input->post('customer'),
                'alatberat' => $this->input->post('alatberat'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status')
            ];
            $id = $this->input->post('id');
            $this->Transaksi_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Transaksi Berhasil DiUbah!</div>');
            redirect('Transaksi');
        }
    }

    public function hapus($id)
    {
        $this->Transaksi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Transaksi tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fas fa-check-circle"></i>Data Transaksi Berhasil Dihapus!</div>');
        }
        redirect('Transaksi');
    }
}
