<?php
class Training_model extends CI_Model{
    function get_all_submit_public(){
        $query = $this->db->query("SELECT * FROM public_training where active='0'");
        return $query->result();
    }

    function get_all_savedraft_public(){
        $query = $this->db->query("SELECT * FROM public_training where active='1'");
        return $query->result();
    }

    function add_public_training(
        $pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang,
        $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, $jumlah_peserta, 
        $catatan, $active
    ){
        $data = array(
            'pengirim_ro' => $pengirim_ro,
            'nomor_ro' => $nomor_ro,
            'kategori_pelatihan' => $kategori_pelatihan, 
            'judul' => $judul,
            'metode_penyelenggaraan' => $metode_penyelenggaraan,
            'kompetensi_bidang' => $kompetensi_bidang,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'provinsi' => $provinsi,
            'kota' => $kota, 
            'tempat' => $tempat, 
            'vendor_penyelenggara' => $vendor_penyelenggara,
            'jumlah_peserta' => $jumlah_peserta, 
            'catatan' => $catatan,
            //'form_usulan' => $form_usulan,
            //'brosur' => $brosur,
            'active' => $active
        );
        $output = $this->db->insert('public_training', $data);
        return $output;
    }

    function get_all_submit_inhouse(){
        $query = $this->db->query("SELECT * FROM inhouse_training where active='0'");
        return $query->result();
    }

    function get_all_savedraft_inhouse(){
        $query = $this->db->query("SELECT * FROM inhouse_training where active='1'");
        return $query->result();
    }

    function add_inhouse_training(
        $pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang, 
        $jenis_kompetensi, $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, 
        $pemilihan_vendor, $jumlah_peserta, $catatan, $active
    ){
        $data = array(
            'pengirim_ro' => $pengirim_ro,
            'nomor_ro' => $nomor_ro, 
            'judul_pelatihan' => $judul,
            'kategori_pelatihan' => $kategori_pelatihan,
            'kompetensi_bidang' => $kompetensi_bidang,
            'jenis_kompetensi' => $jenis_kompetensi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'provinsi' => $provinsi,
            'kota' => $kota, 
            'tempat' => $tempat, 
            'metode_penyelenggaraan' => $metode_penyelenggaraan,
            'vendor_penyelenggara' => $vendor_penyelenggara,
            'metode_pemilihan_vendor' => $pemilihan_vendor,
            'jumlah_peserta' => $jumlah_peserta, 
            'catatan' => $catatan,
            //'form_usulan' => $form_usulan,
            //'brosur' => $brosur,
            'active' => $active
        );
        $output = $this->db->insert('inhouse_training', $data);
        return $output;
    }
}