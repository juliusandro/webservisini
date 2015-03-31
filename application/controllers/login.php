<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller {

        

        public function loginPage(){
        
        $data['title']="login";
        $this->load->view("admin/login_page",$data);
        } 

        public function loginAuthentication(){
        
        $this->load->library('form_validation');
           
        $this->form_validation->set_rules('inputEmail','Email','required|trim|xss_clean|callback_validate_login');
        $this->form_validation->set_rules('inputPassword','Password','required|md5');
            
        if ($this->form_validation->run()){
            $session_data=array('email'=>$this->input->post('email'),'is_logged_in'=>1);
            $this->session->set_userdata($session_data);
           redirect('administration/indexAdmin');
            
            }
            
        else{
            $this->loginPage();
            }
   
            
        }
        
        public function validate_login(){
            $this->load->model('model_login');
            if ($this->model_login->check_login()){
            $this->form_validation->set_message('validate_login', 'The %s field can not be the word');//mesg tidak bisa di pass?
            return true;
            }
            else{
           
            return false;
            }
        }
        
        public function logOut(){
        $this->session->sess_destroy();
        $this->loginPage();
        }
    }
?>