<?php

function cekLogin()
{
    $ci = get_instance();
    return $ci->db->get_where('users', ['email' => $ci->session->userdata('email')])->row_array();
}
function access()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}
function cekAbsen($id)
{
    $ci = get_instance();
    $tanggal = date('Y-m-d');
    $query = $ci->db->query("SELECT users.id, users.nama, data_absensi.keterangan, data_absensi.tanggalAbsensi FROM users LEFT JOIN data_absensi ON users.nama = data_absensi.nama WHERE data_absensi.tanggalAbsensi = '$tanggal' AND users.id = '$id' ");
    if ($query->num_rows() > 0) {
        return "style='pointer-events: none; opacity: 0.2;'";
    }
}
