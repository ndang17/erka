<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();

    }

    public function template($content)
    {
        $data['content'] = $content;
        $this->load->view('web/template',$data);
    }



    public function template_admin($content){
        if(!$this->session->userdata('Login')){
            redirect(base_url('admin'));
        } else {
            $data['content'] = $content;
            $this->load->view('admin/template_admin',$data);
        }

    }

    public function getDateTimeNow(){
        date_default_timezone_set('asia/jakarta');
        $date = date("Y-m-d H:i:s");

        return $date;
    }



}
