<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_web extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template($content);
    }

    public function about_us()
    {
        $data['']='';
        $content = $this->load->view('web/v_about',$data,true);
        $this->temp($content);
    }

    public function services(){
        $data['']='';
        $content = $this->load->view('web/v_services',$data,true);
        $this->temp($content);
    }

    public function projects(){
        $data['']='';
        $content = $this->load->view('web/v_projects',$data,true);
        $this->temp($content);
    }

    public function teams(){
        $data['']='';
        $content = $this->load->view('web/v_teams',$data,true);
        $this->temp($content);
    }

    public function gallery(){
        $data['']='';
        $content = $this->load->view('web/v_gallery',$data,true);
        $this->temp($content);
    }
}
