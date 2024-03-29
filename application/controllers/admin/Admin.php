<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/Common.php');


class Admin extends Common
{

    function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        if (
            $this->session->userdata(SES_ADMIN_ID) == null &&
            $this->session->userdata(SES_SUB_ADMIN_ID) == null &&
            $this->session->userdata(SES_TYPE) != 'admin'
        ) {
            redirect('/admin/login');
        } else {
            redirect('/admin/home');
        }
    }


    public function login()
    {
        $this->load_login();
    }

    public function admin_login()
    {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
        // $this->pr($userName);
        // $this->pr( $password);
        // die();
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => ''
        ];
        if (!empty($userName) && !empty($password)) {
            $this->init_model(MODEL_ADMIN);
            $is_admin = $this->Admin_model->is_admin($userName, md5($password));
            $resp[KEY_STATUS] = !empty($is_admin);
            $resp[KEY_TYPE] = !empty($is_admin) ? $is_admin[KEY_TYPE] : '';

            if ($resp[KEY_STATUS]) {

                if ($is_admin[KEY_TYPE] == USER_ADMIN) {

                    $this->session->set_userdata(SES_ADMIN_ID, $is_admin[KEY_UID]);
                    $this->session->set_userdata(SES_ADMIN_NAME, $is_admin[KEY_EMAIL]);
                    $this->session->set_userdata(SES_TYPE, $is_admin[KEY_TYPE]);

                } 
                // else if ($is_admin[KEY_TYPE] == USER_CENTRE) {

                //     $this->session->set_userdata(SES_CENTRE_ID, $is_admin[KEY_UID]);
                //     $this->session->set_userdata(SES_CENTRE_EMAIL, $is_admin[KEY_EMAIL]);
                //     $this->session->set_userdata(SES_TYPE, $is_admin[KEY_TYPE]);

                // } else if ($is_admin[KEY_TYPE] == USER_STUDENT) {

                //     $this->session->set_userdata(SES_STUDENT_ID, $is_admin[KEY_UID]);
                //     $this->session->set_userdata(SES_STUDENT_EMAIL, $is_admin[KEY_EMAIL]);
                //     $this->session->set_userdata(SES_TYPE, $is_admin[KEY_TYPE]);

                // }
            }
        }
        $resp[KEY_MESSAGE] = $resp[KEY_STATUS] ? 'user found' : 'user not found';
        return $this->response($resp);
    }

    public function logout()
    {
        if ($this->session->userdata(SES_TYPE) == USER_ADMIN) {

            $this->session->unset_userdata(SES_ADMIN_ID);
            $this->session->unset_userdata(SES_ADMIN_NAME);
            $this->session->unset_userdata(SES_TYPE);

        } 
        // else if ($this->session->userdata(SES_TYPE) == USER_SUB_ADMIN) {

        //     $this->session->unset_userdata(SES_SUB_ADMIN_ID);
        //     $this->session->unset_userdata(SES_SUB_ADMIN_NAME);
        //     $this->session->unset_userdata(SES_TYPE);

        // }
        redirect('/admin');
    }

    public function is_auth($page, $data)
    {
        if (
            $this->session->userdata(SES_ADMIN_ID) == null &&
            $this->session->userdata(SES_SUB_ADMIN_ID) == null &&
            $this->session->userdata(SES_TYPE) != 'admin'
        ) {
            redirect('/admin');
        } else {
            $this->load_page($page, $data);
        }
    }

    public function student_login()
    {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
        // $this->pr($userName);
        // $this->pr( $password);
        // die();
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => ''
        ];
        if (!empty($userName) && !empty($password)) {
            $this->init_model(MODEL_ADMIN);
            $is_student = $this->Admin_model->is_admin($userName, md5($password));
            $resp[KEY_STATUS] = !empty($is_student);
            $resp[KEY_TYPE] = !empty($is_student) ? $is_student[KEY_TYPE] : '';

            if ($resp[KEY_STATUS]) {

                if ($is_student[KEY_TYPE] == USER_STUDENT) {

                    $this->session->set_userdata(SES_STUDENT_ID, $is_student[KEY_UID]);
                    $this->session->set_userdata(SES_STUDENT_EMAIL, $is_student[KEY_EMAIL]);
                    $this->session->set_userdata(SES_TYPE_STUDENT, $is_student[KEY_TYPE]);

                }else{
                    $resp[KEY_STATUS] = false;
                }
            }
        }
        $resp[KEY_MESSAGE] = $resp[KEY_STATUS] ? 'user found' : 'user not found';
        return $this->response($resp);
    }

    public function student_logout()
    {
        if ($this->session->userdata(SES_TYPE_STUDENT) == USER_STUDENT || $this->session->userdata(SES_TYPE_STUDENT) == USER_CENTRE) {

            $this->session->unset_userdata(SES_STUDENT_ID);
            $this->session->unset_userdata(SES_STUDENT_EMAIL);
            $this->session->unset_userdata(SES_TYPE_STUDENT);

        } 
        redirect('/home');
    }

    public function centre_login()
    {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');
        // $this->pr($userName);
        // $this->pr( $password);
        // die();
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => ''
        ];
        if (!empty($userName) && !empty($password)) {
            $this->init_model(MODEL_ADMIN);
            $is_student = $this->Admin_model->is_admin($userName, md5($password));
            $resp[KEY_STATUS] = !empty($is_student);
            $resp[KEY_TYPE] = !empty($is_student) ? $is_student[KEY_TYPE] : '';

            if ($resp[KEY_STATUS]) {

                if ($is_student[KEY_TYPE] == USER_CENTRE) {

                    $this->session->set_userdata(SES_STUDENT_ID, $is_student[KEY_UID]);
                    $this->session->set_userdata(SES_STUDENT_EMAIL, $is_student[KEY_EMAIL]);
                    $this->session->set_userdata(SES_TYPE_STUDENT, $is_student[KEY_TYPE]);

                }else{
                    $resp[KEY_STATUS] = false;
                }
            }
        }
        $resp[KEY_MESSAGE] = $resp[KEY_STATUS] ? 'user found' : 'user not found';
        return $this->response($resp);
    }

}