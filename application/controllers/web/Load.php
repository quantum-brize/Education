<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Common.php');

// Include autoloader
require 'vendor/autoload.php';
// use Dompdf\Dompdf;


class Load extends Common {
    function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['home'] = true;
        $data['data_page']['courses'] = $this->Pages_model->get_all_courses();
        $data['data_page']['notices'] = $this->Pages_model->get_all_notices();
        $this->load_page('web/index.php',$data);
    }

    public function about_us(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['about'] = true;
        $this->load_page('web/about_us.php',$data);
    }

    public function contact_us(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['contact'] = true;
        $this->load_page('web/contact_us.php',$data);
    }
    public function online_registration(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['online_registration'] = true;
        $this->load_page('web/online_registration.php',$data);
    }
    public function student_admission(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['student_admission'] = true;
        $this->load_page('web/student_admission.php',$data);
    }
    public function franchise_list(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        $data['data_header']['franchise_list'] = true;
        $data['data_page']['centres'] = $this->Pages_model->get_all_centres();
        $this->load_page('web/franchise_list.php',$data);
    }
    public function course(){
        $id = $this->input->get('id');
        
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        // $data['data_header']['franchise_list'] = true;
        $data['data_page']['course'] = $this->Pages_model->get_course_by_id($id);
        $this->load_page('web/course.php',$data);
    }

    public function edit_profile(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) != null){
        // $data['data_footer']['footer_link']=['profile_js.php'];
        $data['data_page']['profile_data'] = $this->Pages_model->get_user_by_id($this->session->userdata(SES_STUDENT_ID));
        $this->load_page('web/edit_profile.php',$data);
        $this->load->view('web/inc/js/profile_js.php');
        }
    }

    public function get_cirtificate(){
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'student'){
            $this->init_model(MODEL_PAGES);
            $data['data_page']['marks'] = $this->Pages_model->get_student_marks_by_id($this->session->userdata(SES_STUDENT_ID));
        
            $this->init_model(MODEL_PAGES);
            $data = PAGE_DATA_WEB;
            $this->load_page('web/get_cirtificate.php',$data);
        }else{
            redirect('home');
        }
    }

    public function get_cirtificate_centre(){
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'centre'){
            $this->init_model(MODEL_PAGES);
            $data['data_page']['marks'] = $this->Pages_model->get_student_marks_by_id($this->session->userdata(SES_STUDENT_ID));
        
            $this->init_model(MODEL_PAGES);
            $data = PAGE_DATA_WEB;
            $this->load_page('web/get_cirtificate_centre.php',$data);
        }else{
            redirect('home');
        }
    }

    public function get_student_details()
    {
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => '',
            'data' => ''
        ];
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'student'){
            $this->init_model(MODEL_PAGES);
            $resp['data'] = $this->Pages_model->get_student_marks_by_id($this->session->userdata(SES_STUDENT_ID));
            // $this->prd($resp['data']);
            if($resp['data']){
                $resp[KEY_STATUS] = true;
                $resp[KEY_MESSAGE] = 'user found';
                echo $this->response($resp);
            }else{
                $resp[KEY_STATUS] = true;
                $resp[KEY_MESSAGE] = 'user found';
                echo $this->response($resp);
            }
        }else{
                $resp[KEY_MESSAGE] = 'user not found';
                return $this->response($resp);
        }
       
    }

    public function get_cirtificate_details()
    {
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => '',
            'data' => ''
        ];
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'student'){
            $this->init_model(MODEL_PAGES);
            $resp['data'] = $this->Pages_model->get_student_marks_by_id($this->session->userdata(SES_STUDENT_ID));
            // $this->prd($resp['data']);
            if($resp['data']){
                $resp[KEY_STATUS] = true;
                $resp[KEY_MESSAGE] = 'user found';
                echo $this->response($resp);
            }else{
                $resp[KEY_MESSAGE] = 'Cirtificate Not Found!s';
                return $this->response($resp);
            }
        }else{
                $resp[KEY_MESSAGE] = 'user not found';
                return $this->response($resp);
        }
       
    }

    public function get_centre_cirtificate_details()
    {
        $resp = [
            KEY_STATUS => false,
            KEY_MESSAGE => '',
            KEY_TYPE => '',
            'data' => ''
        ];
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'centre'){
            $this->init_model(MODEL_PAGES);
            $resp['data'] = $this->Pages_model->get_centre_details_by_id($this->session->userdata(SES_STUDENT_ID));
            // $this->prd($resp['data']);
            if($resp['data']){
                $resp[KEY_STATUS] = true;
                $resp[KEY_MESSAGE] = 'user found';
                echo $this->response($resp);
            }else{
                $resp[KEY_MESSAGE] = 'Cirtificate Not Found!s';
                return $this->response($resp);
            }
        }else{
                $resp[KEY_MESSAGE] = 'user not found';
                return $this->response($resp);
        }
       
    }












    public function cirtificate(){
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'student'){
            $this->init_model(MODEL_PAGES);
            $data['student'] = $this->Pages_model->get_student_details_by_id($this->session->userdata(SES_STUDENT_ID));
            // $this->prd($data['student']);
            $this->load->view('web/cirtificate.php', $data);
            $this->load->view('web/inc/js/cirtificate_js.php');
        }else{
            redirect('home');
        }
    }

    public function cirtificate_centre(){
        if($this->session->userdata(SES_STUDENT_ID) != null && $this->session->userdata(SES_STUDENT_EMAIL) != null && $this->session->userdata(SES_TYPE_STUDENT) == 'centre'){
            $this->init_model(MODEL_PAGES);
            $data['centre'] = $this->Pages_model->get_centre_details_by_id($this->session->userdata(SES_STUDENT_ID));
            // $this->prd($data['centre']);
            $this->load->view('web/cirtificate_centre.php', $data);
            $this->load->view('web/inc/js/cirtificate_centre_js.php');
        }else{
            redirect('home');
        }
    }


 public function download_pdf(){
    // $html_content   = $this->input->post('html_content');
    $html='<h2> Hello World</h2>';
    // $this->prd($html);
   $mpdf = new Mpdf\Mpdf();
    $mpdf->writeHTML($html);
    $mpdf->Output();

 }
    


    // Admin
    /**HOME*/
    // public function home()
    // {
    //     $this->init_model(MODEL_PAGES);
    //     $data = PAGE_DATA_WEB;
    //     $data['data_header']['home'] = true;
    //     $this->load->view('admin/inc/header.php');
	// 	$this->load->view('admin/inc/header_link.php', $data);
    //     $this->load->view('admin/index.php',$data);
    //     $this->load->view('admin/inc/footer.php');
	// 	$this->load->view('admin/inc/footer_link.php', $data);

    // }

    
    








    // public function donation(){
    //     $this->init_model(MODEL_PAGES);
    //     $data = PAGE_DATA_WEB;
    //     $id = $this->input->get('id');
    //     if(!empty($id)){
    //         $data['data_page']['project'] = $this->Pages_model->get_projects_by_id($id);
    //         $data['data_page']['flag'] = 1;

    //     }else{
    //         $data['data_page']['project'] = $this->Pages_model->get_all_projects();
    //         $data['data_page']['flag'] = 0;
    //     }
        
    //     $this->load_page('web/donation.php',$data);

    // }
}


?>