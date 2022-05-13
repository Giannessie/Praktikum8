<?php
class dosen_model extends CI_Model{
    // Buat Properti atau Variabel
    public $id, $nama, $gender, $tmpt_lahir, $tgl_lahir, $nidn, $pendidikan;

    public function getAll(){
        // menampilkan seluruh data yang ada di table dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdassarkan id
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
?>