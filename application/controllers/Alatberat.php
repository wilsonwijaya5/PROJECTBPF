<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alatberat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alatberat_model');
        $this->load->model('Merk_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Alat Berat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alatberat'] = $this->Alatberat_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("alatberat/vw_alatberat", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Alatberat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['merk'] = $this->Merk_model->get();
        $this->form_validation->set_rules('merk', 'Merk', 'required', [
            'required' => 'Merk Wajib di isi'
        ]);
        $this->form_validation->set_rules('tipe', 'Tipe', 'required', [
            'required' => 'Tipe Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|integer', [
            'required' => 'Tahun Wajib di isi',
            'integer' => 'Tahun harus Angka'
        ]);
        $this->form_validation->set_rules('kondisi', 'Kondisi', 'required', [
            'required' => 'Kondisi Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("alatberat/vw_tambah_alatberat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'tahun' => $this->input->post('tahun'),
                'kondisi' => $this->input->post('kondisi')
            ];
            $this->Alatberat_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Alat Berat Berhasil Ditambah!</div>');
            redirect('Alatberat');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Alatberat";
        $data['merk'] = $this->Merk_model->get();
        $data['alatberat'] = $this->Alatberat_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('tipe', 'Tipe', 'required', [
            'required' => 'Tipe Wajib di isi'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|integer', [
            'required' => 'Tahun Wajib di isi',
            'integer' => 'Tahun harus Angka'
        ]);
        $this->form_validation->set_rules('kondisi', 'Kondisi', 'required', [
            'required' => 'Kondisi Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("alatberat/vw_ubah_alatberat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'merk' => $this->input->post('merk'),
                'tipe' => $this->input->post('tipe'),
                'tahun' => $this->input->post('tahun'),
                'kondisi' => $this->input->post('kondisi')
            ];
            $id = $this->input->post('id');
            $this->Alatberat_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Alat Berat Berhasil DiUbah!</div>');
            redirect('Alatberat');
        }
    }

    public function hapus($id)
    {
        $this->Alatberat_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Alat Berat tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fas fa-check-circle"></i>Data Alat Berat Berhasil Dihapus!</div>');
        }
        redirect('Alatberat');
    }
}
