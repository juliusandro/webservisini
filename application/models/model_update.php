<?php

class Model_update extends CI_controller{


    public function insertDaftar(){

    $data = array('nama_servis_motor' => $this->input->post('namaServis'),'jasa' => $this->input->post('jasa') ,'jenis_kepemilikan' =>$this->input->post('jenisKepemilikan'),'alamat' => $this->input->post('alamat') ,'kontak_telepon' => $this->input->post('telepon'),'biaya_service' => $this->input->post('biaya'));

    $this->db->insert('informasi_service_motor', $data);
        
        
    }
    
    public function deleteDaftar(){
    $this->db->where('id', $id);
    $this->db->delete('informasi_service_motor');
    }

}
?>