<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_about extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template($content);
    }

    public function index()
    {
        $data['']='';
        $content = $this->load->view('web/v_about',$data,true);
        $this->temp($content);
    }
}
