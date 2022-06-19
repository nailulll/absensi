<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMain');
        access();
        if ($this->session->userdata('role') != 'admin') {
            redirect('auth/block');
        }
    }
    public function index()
    {
        $data['title'] = 'Main Page';
        $data['subtitle'] = 'Data Karyawan';
        $data['karyawan'] = $this->ModelMain->getData();

        $this->load->view('template/header', $data);
        $this->load->view('main/index', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $data['title'] = 'Add Page';
        $data['subtitle'] = 'Tambah Karyawan';
        $data['jabatan'] = ['Driver', 'Teknisi', 'Security', 'Operator', 'IT Support', 'Manager'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirmPassword]|min_length[6]');
        $this->form_validation->set_rules('confirmPassword', 'Password', 'required|matches[password]|min_length[6]');
        $this->form_validation->set_message('required', '%s harus diisi!');
        $this->form_validation->set_message('matches', '%s harus sama!');
        $this->form_validation->set_message('min_length', '%s harus lebih dari 6!');
        $this->form_validation->set_message('valid_email', '%s harus valid!');
        $this->form_validation->set_message('is_unique', '%s sudah terdaftar!');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('main/add', $data);
            $this->load->view('template/footer');
        } else {
            $this->insert();
        }
    }
    private function insert()
    {
        $config['upload_path']          = './assets/profile/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal diupload!</div>');
            redirect('main');
        } else {
            $gambar = $_FILES['gambar']['name'];
            $gambar = $this->upload->data('file_name');
            $this->ModelMain->add($gambar);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambah!</div>');
            redirect('main');
        }
    }
    public function delete($id)
    {
        $this->ModelMain->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil dihapus!</div>');
        redirect('main');
    }
    public function see($id)
    {
        $data['title'] = 'Detail Page';
        $data['subtitle'] = 'Detail Karyawan';
        $data['karyawan'] = $this->ModelMain->getById($id);

        $this->load->view('template/header', $data);
        $this->load->view('main/see', $data);
        $this->load->view('template/footer');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Page';
        $data['subtitle'] = 'Edit Karyawan';
        $data['karyawan'] = $this->ModelMain->getById($id);
        $data['jabatan'] = ['Driver', 'Teknisi', 'Security', 'Operator', 'IT Support', 'Manager'];

        $this->load->view('template/header', $data);
        $this->load->view('main/edit', $data);
        $this->load->view('template/footer');
    }
    public function editData()
    {
        $this->db->set('jabatan', $this->input->post('jabatan'));
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('users');
        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil diubah!</div>');
        redirect('main');
    }
}
