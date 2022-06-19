<?php
class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        access();
    }
    public function index()
    {
        $data['title'] = 'Profile Page';
        $data['subtitle'] = 'Profile';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('profile/index', $data);
            $this->load->view('template/footer');
        } else {
            $namaLengkap = $this->input->post('nama');

            // cek jika ada gambar
            $uploadImage = $_FILES['image']['name'];

            if ($uploadImage) {
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size'] = '5000';
                $config['upload_path'] = './assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $oldImage = cekLogin()['gambar'];
                    if ($oldImage != 'default.png') {
                        unlink(FCPATH . 'assets/profile/' . $oldImage);
                    }
                    $newImage = $this->upload->data('file_name');
                    $this->db->set('gambar', $newImage);
                }
            }
            $this->db->set('nama', $namaLengkap);
            $this->db->where('email', cekLogin()['email']);
            $this->db->update('users');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Profile berhasil diubah!</div>');
            redirect('profile');
        }
    }
}
