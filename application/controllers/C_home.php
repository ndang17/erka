<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template($content);
    }

    public function index()
    {
        $data['']='';
        $content = $this->load->view('web/home',$data,true);
        $this->temp($content);
    }
}
