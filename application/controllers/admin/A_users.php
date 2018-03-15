<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_users extends MY_Controller {


    public function temp($content){
//        $data['content'] = $content;
        parent::template_admin($content);
    }

    public function index()
    {
        $data['url_back']='';
        $content = $this->load->view('admin/users',$data,true);
        $this->temp($content);
    }

    public function crudUsers(){
        $formData = $this->input->post('formData');

        if($formData['action']=='add'){

            // Cek Email
            $checkEmail = $this->db
                ->get_where('erka_db.users', array('Email' => $formData['Data']['Email']))
                ->result_array();

            if(count($checkEmail)>0){
                return print_r(0);
            } else {
                $pass = $this->genratePass($formData['Data']['Email'],$formData['Data']['Password']);
                $formData['Data']['Password'] = $pass;

                $this->db->insert('erka_db.users', $formData['Data']);
                $insert_id = $this->db->insert_id();
                return print_r($insert_id);
            }

        }
        else if($formData['action']=='read'){
            $query = $this->db
                ->get_where('erka_db.users', array('Status' => '1'))
                ->result_array();
            header('Content-Type: application/json');
            return print_r(json_encode($query));
        }
        else if($formData['action']=='delete'){

            $this->db->where('ID', $formData['ID']);
            $this->db->delete('erka_db.users');

            return print_r(1);
        }
        else if($formData['action']=='reset') {

            $pass = $this->genratePass($formData['Email'],$formData['NewPassword']);

            $set = array(
                'Password' => $pass,
                'UpdateBy' => $formData['UpdateBy'],
                'UpdateAt' => $formData['UpdateAt']

            );
            $this->db->where('ID', $formData['ID']);
            $this->db->update('erka_db.users',$set);

            return print_r(1);
        }


    }

    private function genratePass($email,$Password){

        $plan_password = $email.''.$Password;
        $pas = md5($plan_password);
        $pass = sha1('jksdhf832746aiH{}{()&(*&(*'.$pas.'HdfevgyDDw{}{}{;;*766&*&*');

        return $pass;
    }

}
