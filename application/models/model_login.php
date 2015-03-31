<?php

class Model_login extends CI_Controller {

    public function check_login(){
    $this->db->where('email',$this->input->post('inputEmail'));
    $this->db->where('password',md5($this->input->post('inputPassword')));
    $query=$this->db->get('users');
        
        if ($query->num_rows()==1){
        return true;
        }
        else{
        return false;
        }
    
    }
    
}

?>