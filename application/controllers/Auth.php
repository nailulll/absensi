<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_message('required', '%s harus diisi!');
        $this->form_validation->set_message('valid_email', '%s harus valid!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $this->cekLogin();
        }
    }
    private function cekLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'role' => $user['role'],
                    'email' => $user['email'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'admin') {
                    redirect('main');
                } else {
                    redirect('absensi');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Email tidak terdaftar!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success">Anda berhasil keluar!</div>');
        redirect('auth');
    }
    public function block()
    {
        echo '<p>Akses ditolak!</p>';
    }
}
