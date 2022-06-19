<?php

class ModelMain extends CI_Model
{
    public function getData()
    {
        return $this->db->get_where('users', ['role' => 'karyawan'])->result_array();
    }
    public function add($gambar)
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => 'karyawan',
            'gambar' => $gambar,
            'jenisKelamin' => $this->input->post('jenisKelamin'),
            'jabatan' => $this->input->post('jabatan'),
        ];
        $this->db->insert('users', $data);
    }
    public function getById($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }
    public function delete($id)
    {
        $oldImage = $this->db->get_where('users', ['id' => $id])->row_array();
        unlink(FCPATH . 'assets/profile/' . $oldImage['gambar']);
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
