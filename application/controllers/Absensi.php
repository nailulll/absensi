<?php

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAbsen');
        access();
    }
    public function index()
    {
        $data['title'] = 'Absensi Page';
        $data['subtitle'] = 'Absensi';
        $data['karyawan'] = $this->ModelAbsen->getData();
        $data['absen'] = $this->ModelAbsen->getDataAbsen();
        $data['hadir'] = $this->ModelAbsen->getHadir();
        $data['izin'] = $this->ModelAbsen->getIzin();
        $data['alpha'] = $this->ModelAbsen->getAlpha();

        $this->load->view('template/header', $data);
        $this->load->view('absen/index', $data);
        $this->load->view('template/footer');
    }
    public function ket($ket)
    {
        $id = $this->uri->segment(4, 0);
        $nama = $this->db->get_where('users', ['id' => $id])->row_array();

        $this->ModelAbsen->ket($ket, $nama);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Karyawan ' . $nama['nama'] . ' ' . $ket . '!</div>');
        redirect('absensi');
    }
    public function report()
    {
        $awal = $this->input->post('tanggalAwal');
        $akhir = $this->input->post('tanggalAkhir');
        $data['report'] = $this->ModelAbsen->report($awal, $akhir);

        $data['title'] = 'Laporan Page';
        $data['subtitle'] = 'Laporan kehadiran dari ' . $awal . ' sampai dengan ' . $akhir;

        $this->load->view('template/header', $data);
        $this->load->view('absen/report', $data);
        $this->load->view('template/footer');
    }
}
