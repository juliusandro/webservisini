<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Administration extends CI_Controller {

        public function checkSession(){
        if ($this->session->userdata('is_logged_in')==false){
        redirect("index.html");
        }
        }

        public function indexAdmin(){
            $this->checkSession();
            $data['title']="admin halaman utama";
            $this->load->view("admin/header_admin",$data);
            $this->load->view("admin/admin_index");
            $this->load->view("admin/footer_admin");
            }
        
        
        
        public function editDaftarMotor(){
            $this->checkSession();
            $data['title']="admin edit motor";
            $this->load->view("admin/header_admin",$data);
            $this->load->model('model_get');
            $data['result']=$this->model_get->get_informasi();
            $this->load->view("admin/edit_daftar",$data);
            $this->load->view("admin/footer_admin");
        }
        
        public function tambahDaftarMotor(){
            $this->checkSession();
            $data['title']="admin edit motor";
            $this->load->view("admin/header_admin",$data);
            $this->load->view("admin/tambah_servis_motor");
            $this->load->view("admin/footer_admin");
        }
        
         public function submitTambahMotor(){
            $this->load->model('model_update');
            $this->model_update->insertDaftar();
            $this-> editDaftarMotor();
    }
        public function deleteServisMotor(){
            $this->load->model('model_update');
            $this->model_update->deleteDaftar();
        }
    
    }
?>