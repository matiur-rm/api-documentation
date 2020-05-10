<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

class Apisimulator extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        $this->load->library(array('session'));
        //load model admin
        $this->load->model('admin');
        $this->load->helper('url');
    }
    
    public function index(){

        $this->load->view('apisimulator/api-req-simulator');
       
      
    }
    
    public function apiDocLoad($apiid)
    {
        $data['jsonFile'] = ['name'=>'matiur'];
        $data['docFile'] = ['name'=>'karim'];
        
       echo  json_encode($data);
       
        
    }
    public function geoFence()
    {

        $this->load->view('apidoc/dog-view'); 

    }

    public function errorCode(){

        $this->load->view('apisimulator/error-code');
       
      
    }

 
}