<?php
class ModelAbsen extends CI_Model
{
    public function getData()
    {
        // $tanggal = '2022-6-19';
        // $query = $this->db->query("SELECT users.id, users.nama, data_absensi.keterangan FROM users LEFT JOIN data_absensi ON users.nama = data_absensi.nama");
        // return $query->result_array();
        return $this->db->get_where('users', ['role' => 'karyawan'])->result_array();
    }
    public function getDataAbsen()
    {
        return $this->db->get_where('data_absensi', ['tanggalAbsensi' => date('Y-m-d')])->result_array();
    }
    public function ket($ket, $nama)
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'nama' => $nama['nama'],
            'tanggalAbsensi' => date('Y-m-d'),
            'waktu' => date('H:i:s'),
            'keterangan' => $ket,
        ];
        $this->db->insert('data_absensi', $data);
    }
    public function getHadir()
    {
        $nama = cekLogin()['nama'];
        $hadir = $this->db->query(" SELECT COUNT(keterangan) as hadir, nama FROM data_absensi WHERE keterangan = 'hadir' AND nama = '$nama' ");
        return $hadir->row()->hadir;
    }
    public function getIzin()
    {
        $nama = cekLogin()['nama'];
        $izin = $this->db->query(" SELECT COUNT(keterangan) as izin, nama FROM data_absensi WHERE keterangan = 'izin' AND nama = '$nama' ");
        return $izin->row()->izin;
    }
    public function getAlpha()
    {
        $nama = cekLogin()['nama'];
        $alpha = $this->db->query(" SELECT COUNT(keterangan) as alpha, nama FROM data_absensi WHERE keterangan = 'alpha' AND nama = '$nama' ");
        return $alpha->row()->alpha;
    }
    public function report($awal, $akhir)
    {
        $nama = cekLogin()['nama'];
        $query = $this->db->query(" SELECT * FROM data_absensi WHERE nama = '$nama' AND tanggalAbsensi BETWEEN '$awal' AND '$akhir' ");
        return $query->result_array();
    }
}
