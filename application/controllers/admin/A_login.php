<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_login extends CI_Controller {


    private function template($content){
        $data['content']=$content;
        $this->load->view('admin/login/template_login',$data);
    }


    public function index()
    {
        $data['url_back']='';
        $content = $this->load->view('admin/login/login',$data,true);
        $this->template($content);
    }

    public function forgot_password(){
        $data['url_back']='';
        $content = $this->load->view('admin/login/forgot_password',$data,true);
        $this->template($content);
    }

    public function auth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $dateNow = $this->input->post('dateNow');

        $pass = $this->genratePass($email,$password);

        $where = array('email' => $email,'password'=>$pass);

        $query = $this->db
            ->get_where('erka_db.users', $where,1)->result_array();

        if(count($query)==1){
            $this->db->set('LastLogin', $dateNow);
            $this->db->where('ID', $query[0]['ID']);
            $this->db->update('erka_db.users');

            $query[0]['Login'] = true;
            $this->session->set_userdata($query[0]);
            return print_r(1);
        } else {
            return print_r(0);
        }

    }

    private function genratePass($email,$Password){

        $plan_password = $email.''.$Password;
        $pas = md5($plan_password);
        $pass = sha1('jksdhf832746aiH{}{()&(*&(*'.$pas.'HdfevgyDDw{}{}{;;*766&*&*');

        return $pass;
    }

    public function genratePassword(){
        $email = 'nndg.ace3@gmail.com';
        $Password = '123456';
        $plan_password = $email.''.$Password;
        $pas = md5($plan_password);
        $pass = sha1('jksdhf832746aiH{}{()&(*&(*'.$pas.'HdfevgyDDw{}{}{;;*766&*&*');

        return print_r($pass);
    }

    public function logOut(){
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

    public function sendmail($to='nndg.ace3@gmail.com'){
        $ci = get_instance();

        $config['protocol'] = "smtp";
        $config['host'] = "ssl://smtp.gmail.com";
        $config['port'] = "465";
        $config['user'] = "nndg.m94@gmail.com";
        $config['pass'] = "9januari1994";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $ci->load->library('email',$config);
//        $ci->email->initialize($config);
        $mesg = '
        <div style="margin:0;padding:10px 0;background-color:#ebebeb;font-size:14px;line-height:20px;font-family:Helvetica,sans-serif;width:100%;text-align:center">
            <div class="adM">
                <br>
            </div>
            <table style="width:600px;margin:0 auto;background-color:#ebebeb" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td></td>
                        <td style="background-color:#fff;padding:0 30px;color:#333;vertical-align:top">
                            <br>
                            <div style="font-family:Proxima Nova Semi-bold,Helvetica,sans-serif;font-weight:bold;font-size:24px;line-height:24px;color:#2196f3">
                                HORE BERHASIL KIRIM EMAIL HTML
                            </div>
                            <div style="font-family:Proxima Nova Reg,Helvetica,sans-serif">
                                <div style="max-width:600px;margin:30px 0;display:block;font-size:14px;text-align:left!important">
                                    Hai Nandang Mulyadi,<br><br>

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <br/>
                                    <a href="https://gist.github.com/ndang17/a787a7d4ef571753b04e551af95c4903" style="text-decoration:none;color:#fff;background-color:#337ab7;border:0;line-height:2;font-weight:bold;margin-right:10px;text-align:center;display:inline-block;border-radius:3px;padding:6px 12px;font-size:14px" target="_blank">Log Me In</a>
                                    <br><br>
                                    Atau klik link di bawah ini :
                                    <br>
                                    <a href="https://gist.github.com/ndang17/a787a7d4ef571753b04e551af95c4903" target="_blank">https://gist.github.com/ndang17/a787a7d4ef571753b04e551af95c4903</a>
                                    <br><br><br>
                                    <p style="color:#EB6936;"><i>*) Jangan dibalas, e-mail ini dikirim secara otomatis</i> </p>

                                </div>

                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div style="background-color:#fff;border-top:1px solid #ddd; ">
                                    <p style="color:#b7b0b0;font-size:0.9em;padding-bottom:10px;">NANDANG MULYADI
                                    </p>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        ';


        $ci->email->from('dari@gmail.com', 'Dari');
        //------------ Kirim ke beberapa email -------
//        $list = array('mail_1@gmail.com','mail_2@yahoo.com','mail_3@email_apa_aja.com');
//        $ci->email->to($list);
        //--------------------------------------------
        $ci->email->to($to);

        $ci->email->subject('TES EMAIL CUY');
        $ci->email->message(''.$mesg);
        $ci->email->send();
    }



}
