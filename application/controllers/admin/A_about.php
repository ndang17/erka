<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_about extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template_admin($content);
    }

    public function index()
    {
        $data['url_back']='';
        $data['about']= $this->db->get_where('erka_db.about_us', array('ID' => 1), 1)->result_array()[0];
        $content = $this->load->view('admin/about',$data,true);
        $this->temp($content);
    }

    public function crudAboutUs(){
        $formData = $this->input->post('formData');

        $this->db->where('ID', $formData['ID']);
        $this->db->update('erka_db.about_us',$formData['Data']);

        return print_r(1);
    }

}
