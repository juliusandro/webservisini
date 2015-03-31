<?php

class Model_get extends CI_controller{


    public function get_informasi(){

    $query = $this->db->get("informasi_service_motor");
        
   return $query;
    }

}
?>