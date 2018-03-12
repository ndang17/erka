<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_home extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template_admin($content);
    }

    public function index()
    {
        $data['url_back']='';
        $content = $this->load->view('admin/home',$data,true);
        $this->temp($content);
    }

    public function add_new_slider(){
        $dbs = $this->db->get_where('erka_db.sliders', array('Status' =>'1'))->result_array();
        $data['unix']= count($dbs)+1;
        $data['url_back']= base_url('admin/home');
        $content = $this->load->view('admin/add_new_slider',$data,true);
        $this->temp($content);
    }

    function do_upload2(){

        $unix_name = 'slider_'.$this->input->post('inputSlider');

        $fileName = $this->input->post('fileName');
        if($fileName!=''){
            $path = './images/slider/'.$fileName;

            if(file_exists($path)){
                unlink($path);
            }
        }


        $config['upload_path']          = './images/slider/';
        $config['allowed_types']        = 'gif|jpeg|jpg|png';
//        $config['max_size']             = 100;
//        $config['max_width']            = 1024;
//        $config['max_height']           = 768;

        $config['file_name'] = $unix_name;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            return print_r(json_encode($error));
        }
        else
        {
            $success = array('success' => $this->upload->data());

            $datas = $this->db->get_where('erka_db.sliders', array('Photo' => $success['success']['file_name']));

            if(count($datas->result_array())==0){
                $data_insert = array(
                    'Photo' => $success['success']['file_name'],
                    'Status' => '0'
                );

                $this->db->insert('erka_db.sliders', $data_insert);
            }


            return print_r(json_encode($success));
        }
    }

    function do_upload(){

        $unix_name = 'slider_'.$this->input->post('inputSlider');


        $config['upload_path']          = './images/slider/';
        $config['allowed_types']        = 'gif|jpeg|jpg|png';
//        $config['max_size']             = 100;
//        $config['max_width']            = 1024;
//        $config['max_height']           = 768;

        $config['file_name'] = $unix_name;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            return print_r(json_encode($error));
        }
        else
        {
            $success = array('success' => $this->upload->data());

            $data_insert = array(
                'Tittle' => $this->input->post('formTittle'),
                'Description' => $this->input->post('formDescription'),
                'Photo' => $success['success']['file_name'],
                'Status' => '0'
            );

            $this->db->insert('erka_db.sliders', $data_insert);
            return print_r(json_encode($success));
        }
    }


}
