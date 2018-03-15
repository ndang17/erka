<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_services extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template_admin($content);
    }

    private function loadPage($page){

        $data['page']=$page;
        $content = $this->load->view('admin/services/menu_services',$data,true);
        $this->temp($content);
    }

    public function index()
    {

        $data['url_back']='';
//        $this->db->order_by('Order', 'ASC');
        $data['services']= $this->db->order_by('Order', 'ASC')->get('erka_db.services')->result_array();
        $page = $this->load->view('admin/services/services_list',$data,true);
        $this->loadPage($page);
    }

    public function add_new_services(){
        $data['url_back']='';
//        $data['about']= $this->db->get_where('erka_db.about_us', array('ID' => 1), 1)->result_array()[0];
        $page = $this->load->view('admin/services/add_services',$data,true);
        $this->loadPage($page);
    }

    public function addNewServices(){

        $unix_name = 'services_'.$this->input->post('formUnix');

        $config['upload_path']          = './images/services/';
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
                'Status' => '1',
                'UpdateBy' => $this->session->userdata('Email'),
                'UpdateAt' => parent::getDateTimeNow()
            );

            $this->db->insert('erka_db.services', $data_insert);
            return print_r(json_encode($success));
        }
    }

    public function changeOrder(){
        $dataArray = $this->input->post('dataArray')[0];

        $order = 1;
        for($i=0;$i<count($dataArray);$i++){
            $this->db->set('Order', $order);
            $this->db->where('ID', $dataArray[$i]['id']);
            $this->db->update('erka_db.services');
            $order += 1;
        }
        
        return print_r(1);
    }


}
