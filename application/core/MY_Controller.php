<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('Login')){
            redirect(base_url('admin'));
        }

    }

    public function template($content)
    {
        $data['content'] = $content;
        $this->load->view('web/template',$data);
    }



    public function template_admin($content){
        $data['content'] = $content;
        $this->load->view('admin/template_admin',$data);
    }



}
