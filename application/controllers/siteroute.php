<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siteroute extends CI_Controller {

 /*
| ----------------------------------------------------------------------------
| index
| ---------------------------------------------------------------------------
| Halaman default ketika membuka servisini
| 
*/
    
    public function index(){
        $this->home();
      
      }
    
        
    
    public function home() {
        $data['title']="Beranda";
        $this->load->view('header',$data);  //load views header dan load array data
        $this->load->view('content/halaman_awal');
        $this->load->view('footer');
      
    }
    
     
    public function daftarBengkel() {
        $data['title']="Daftar Bengkel";
        $this->load->view('header',$data);  //load views header dan load array data
        $this->load->model('model_get');
        $data['result']=$this->model_get->get_informasi();
        $this->load->view('content/daftar_motor',$data);
        $this->load->view('footer');
      
    }
    
    public function recomended() {
        $data['title']="Rekomendasi";
        $this->load->view('header',$data);  //load views header dan load array data
        $this->load->view('content/Rekomendasi');
        $this->load->view('footer');
      
    }
    
    public function contactUs () {
        $data['title']="Kontak Kami";
        $this->load->view('header',$data);  //load views header dan load array data
        $this->load->view('content/Hubungi_kami');
        $this->load->view('footer');
      
    }
    }
?>