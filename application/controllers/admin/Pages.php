<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'controllers/admin/Admin.php');


class Pages extends Admin
{


    function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if (
            $this->session->userdata(SES_ADMIN_ID) == null &&
            $this->session->userdata(SES_SUB_ADMIN_ID) == null
        ) {
            redirect('/admin/login');
        } else {
            redirect('/admin/home');
        }
    }

    /**HOME*/
    public function home(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_header']['home'] = true;
        $this->is_auth('admin/index.php',$data);
    }

    public function admin_centres(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['centre_js.php'];
        $data['data_header']['centres'] = true;
        $data['data_page']['centres'] = $this->Pages_model->get_all_centres();

        $this->is_auth('admin/centres.php',$data);
    }

    public function admin_students(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link'] = ['student_js.php'];
        $data['data_header']['student_list'] = true;
        $data['data_page']['students'] = $this->Pages_model->get_all_students();

        $this->is_auth('admin/students.php',$data);
    }

    public function courses(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['course_js.php'];
        $data['data_header']['courses'] = true;
        $data['data_page']['courses'] = $this->Pages_model->get_all_courses();

        $this->is_auth('admin/courses.php',$data);
    }

    public function cource_add(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['course_js.php'];
        $data['data_header']['courses'] = true;

        $this->is_auth('admin/course_add.php',$data);
    }

    public function course_update()
    {
        $id = $this->input->get('id');

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['course_js.php'];
        $data['data_header']['courses'] = true;
        $data['data_page']['course'] = $this->Pages_model->get_course_by_id($id);


        $this->is_auth('admin/course_update.php', $data);
    }

    public function notices(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['notice_js.php'];
        $data['data_header']['notices'] = true;
        $data['data_page']['notices'] = $this->Pages_model->get_all_notices();

        $this->is_auth('admin/notices.php',$data);
    }

    public function notice_add(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['notice_js.php'];
        $data['data_header']['notices'] = true;

        $this->is_auth('admin/notice_add.php',$data);
    }

    public function notice_update()
    {
        $id = $this->input->get('id');

        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['notice_js.php'];
        $data['data_header']['notices'] = true;
        $data['data_page']['notice'] = $this->Pages_model->get_notice_by_id($id);


        $this->is_auth('admin/notice_update.php', $data);
    }

    public function results(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['result_js.php'];
        $data['data_header']['results'] = true;
        $data['data_page']['results'] = $this->Pages_model->get_all_results();

        $this->is_auth('admin/results.php',$data);
    }

    public function creat_result(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['result_js.php'];
        $data['data_header']['results'] = true;
        $data['data_page']['courses'] = $this->Pages_model->get_all_courses();
        $data['data_page']['students'] = $this->Pages_model->get_all_students();

        $this->is_auth('admin/creat_result.php',$data);
    }

    public function get_in_touches(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['get_in_touch_js.php'];
        $data['data_header']['get_in_touch'] = true;
        $data['data_page']['get_in_touchs'] = $this->Pages_model->get_all_get_in_touches();

        $this->is_auth('admin/get_in_touches.php',$data);
    }

    public function enroled_courses(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['get_in_touch_js.php'];
        $data['data_header']['enroled_courses'] = true;
        $data['data_page']['enroled_courses'] = $this->Pages_model->get_all_enroled_courses();

        $this->is_auth('admin/enroled_courses.php',$data);
    }

    public function testimonial(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['testimonial_js.php'];
        $data['data_header']['testimonial'] = true;
        $data['data_page']['testimonials'] = $this->Pages_model->get_all_testimonials();

        $this->is_auth('admin/testimonial.php',$data);
    }

    public function testimonial_add(){
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_ADMIN;
        $data['data_footer']['footer_link']=['testimonial_js.php'];
        $data['data_header']['testimonial'] = true;
        // $data['data_page']['testimonial'] = $this->Pages_model->get_all_enroled_courses();

        $this->is_auth('admin/testimonial_add.php',$data);
    }

    public function add_admin(){
        $insert_users = [
            "uid"       => $this->generate_uid(UID_USER),
            "name"      => 'admin',
            "email"     => 'admin@gmail.com',
            "phone"     => '9679377775',
            "dob"       => '15-01-2002',
            "img"       => '/uploads/users_img/',
            "password"  => md5('123456'),
            "role"      => 'admin',
            "status"    => 'active',
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_admin = $this->Pages_model->add_admin($insert_users);
    }

    public function franchise_registration()
    {
        $uid_users      = $this->generate_uid(UID_USER);
        $name           = $this->input->post('directors_name');
        $email          = $this->input->post('email');
        $phone          = $this->input->post('contact');
        $dob            = $this->input->post('dob');
        $password       = $this->input->post('password');
        $role           = 'centre';
        $status         = 'pending';
        $profile_img    = "";
        if (!empty($_FILES['directors_photo']['name'][0])) {
            $profile_img_data = $this->upload_files('./uploads/users_img/', 'directors_photo', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $profile_img = '/uploads/users_img/' . $profile_img_data['file_name'];
        }
        
        $franchise_type             = $this->input->post('franchise_type');
        $referral_id                = $this->input->post('ref_id');
        $centre_name                = $this->input->post('centre_name');
        $fathers_name               = $this->input->post('fathers_name');
        $centre_state               = $this->input->post('centre_state');
        $centre_district            = $this->input->post('centre_district');
        $centre_place               = $this->input->post('centre_place');
        $centre_block               = $this->input->post('centre_block');
        $centre_post_office         = $this->input->post('centre_post_office');
        $centre_police_station      = $this->input->post('centre_police_station');
        $centre_pin_code            = $this->input->post('centre_pin_code');
        $centre_contact_no          = $this->input->post('centre_contact_no');
        $total_area                 = $this->input->post('total_area');
        $total_computers            = $this->input->post('number_of_computers');
        $total_staff                = $this->input->post('total_staff');
        $aadhar_img                 = "";
        $logo_img                   = "";
        $last_qualification_img     = "";
        $directors_signature_img    = "";
        if (!empty($_FILES['aadhar_img']['name'][0])) {
            $aadhar_img_data = $this->upload_files('./uploads/centre_img/', 'aadhar_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $aadhar_img = '/uploads/centre_img/' . $aadhar_img_data['file_name'];
        }
        if (!empty($_FILES['centre_logo']['name'][0])) {
            $logo_img_data = $this->upload_files('./uploads/centre_img/', 'centre_logo', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $logo_img = '/uploads/centre_img/' . $logo_img_data['file_name'];
        }
        if (!empty($_FILES['last_qualification_img']['name'][0])) {
            $last_qualification_img_data = $this->upload_files('./uploads/centre_img/', 'last_qualification_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $last_qualification_img = '/uploads/centre_img/' . $last_qualification_img_data['file_name'];
        }
        if (!empty($_FILES['directors_signature_img']['name'][0])) {
            $pdirectors_signature_img_data = $this->upload_files('./uploads/centre_img/', 'directors_signature_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $directors_signature_img = '/uploads/centre_img/' . $pdirectors_signature_img_data['file_name'];
        }
        
        $res_state          = $this->input->post('res_state');
        $res_district       = $this->input->post('res_district');
        $res_vill_city      = $this->input->post('res_vill');
        $res_block          = $this->input->post('res_block');
        $res_post_office    = $this->input->post('res_post_office');
        $res_police_station = $this->input->post('res_police_station');
        $res_pin_code       = $this->input->post('res_pin_code');
        $res_contact        = $this->input->post('res_contact_no');

        $insert_users = [
            "uid"       => $uid_users,
            "name"      => $name,
            "email"     => $email,
            "phone"     => $phone,
            "dob"       => $dob,
            "img"       => $profile_img,
            "password"  => md5($password),
            "role"      => $role,
            "status"    => $status,
        ];

        $insert_centre = [
            "uid"                       => $this->generate_uid(UID_CENTRE),
            "user_id"                   => $uid_users,
            "franchise_type"            => $franchise_type,
            "referral_id"               => $referral_id,
            "centre_name"               => $centre_name,
            "fathers_name"              => $fathers_name,
            "state"                     => $centre_state,
            "district"                  => $centre_district,
            "centre_place"              => $centre_place,
            "block"                     => $centre_block,
            "post_office"               => $centre_post_office,
            "police_station"            => $centre_police_station,
            "pincode"                   => $centre_pin_code,
            "contact"                   => $centre_contact_no,
            "total_area"                => $total_area,
            "total_computers"           => $total_computers,
            "total_staff"               => $total_staff,
            "logo_img"                  => $logo_img,
            "signature_img"             => $directors_signature_img,
            "aadhar_img"                => $aadhar_img,
            "last_qualification_img"    => $last_qualification_img,
        ];

        $insert_address = [
            "uid"               => $this->generate_uid(UID_ADDRESS),
            "user_id"           => $uid_users,
            "state"             => $res_state,
            "district"          => $res_district,
            "vill_city"         => $res_vill_city,
            "block"             => $res_block,
            "post_office"       => $res_post_office,
            "police_station"    => $res_police_station,
            "pin"               => $res_pin_code,
            "contact"           => $res_contact,
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_centre = $this->Pages_model->add_new_centre($insert_users, $insert_centre, $insert_address);

        if ($add_new_centre) {
            redirect('online-registration');
        }
        
    }

    public function student_registration()
    {
        $uid_users      = $this->generate_uid(UID_USER);
        $name           = $this->input->post('name');
        $email          = $this->input->post('email');
        $phone          = $this->input->post('phone');
        $dob            = $this->input->post('dob');
        $password       = $this->input->post('password');
        $role           = 'student';
        $status         = 'pending';
        $profile_img    = "";
        if (!empty($_FILES['student_photo']['name'][0])) {
            $profile_img_data = $this->upload_files('./uploads/users_img/', 'student_photo', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $profile_img = '/uploads/users_img/' . $profile_img_data['file_name'];
        }
        
        $fathers_name       = $this->input->post('fathers_name');
        $whatsapp           = $this->input->post('whatsapp');
        $aadhar             = $this->input->post('aadhar');
        $last_qualific      = $this->input->post('last_qualific');
        $passing_year       = $this->input->post('passing_year');
        $parcentage         = $this->input->post('parcentage');
        $marks              = $this->input->post('marks');
        $exam_board         = $this->input->post('exam_board');
        $aadhar_img         = "";
        $marksheet_img      = "";
        if (!empty($_FILES['aadhar_img']['name'][0])) {
            $aadhar_img_data = $this->upload_files('./uploads/student_img/', 'aadhar_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $aadhar_img = '/uploads/student_img/' . $aadhar_img_data['file_name'];
        }
        if (!empty($_FILES['marksheet_img']['name'][0])) {
            $marksheet_img_data = $this->upload_files('./uploads/student_img/', 'marksheet_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $marksheet_img = '/uploads/student_img/' . $marksheet_img_data['file_name'];
        }
        
        $state          = $this->input->post('state');
        $district       = $this->input->post('district');
        $vill_city      = $this->input->post('vill_city');
        $block          = $this->input->post('block');
        $post_office    = $this->input->post('post_office');
        $police_station = $this->input->post('police_station');
        $pin_code       = $this->input->post('pin_code');
        $contact        = $this->input->post('contact_no');

        $insert_users = [
            "uid"       => $uid_users,
            "name"      => $name,
            "email"     => $email,
            "phone"     => $phone,
            "dob"       => $dob,
            "img"       => $profile_img,
            "password"  => md5($password),
            "role"      => $role,
            "status"    => $status,
        ];

        $insert_student = [
            "uid"                   => $this->generate_uid(UID_STUDENT),
            "user_id"               => $uid_users,
            "fathers_name"          => $fathers_name,
            "whatsapp_no"           => $whatsapp,
            "aadhar"                => $aadhar,
            "last_qualification"    => $last_qualific,
            "passing_year"          => $passing_year,
            "marks_in_parcentage"   => $parcentage,
            "marks"                 => $marks,
            "exam_board"            => $exam_board,
            "aadhar_img"            => $aadhar_img,
            "marksheet_img"         => $marksheet_img,
        ];

        $insert_address = [
            "uid"               => $this->generate_uid(UID_ADDRESS),
            "user_id"           => $uid_users,
            "state"             => $state,
            "district"          => $district,
            "vill_city"         => $vill_city,
            "block"             => $block,
            "post_office"       => $post_office,
            "police_station"    => $police_station,
            "pin"               => $pin_code,
            "contact"           => $contact,
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_centre = $this->Pages_model->add_new_student($insert_users, $insert_student, $insert_address);

        if ($add_new_centre) {
            redirect('student-admission');
        }
        
    }

    public function update_centre_status(){
        $user_id = $this->input->post('user_id');
        $status = $this->input->post('status');
        $this->init_model(MODEL_PAGES);
        $update_data = $this->Pages_model->update_centre_status($user_id, $status);
        $resp = ['success' => true, 'msg' => $update_data];
        return $this->response($resp);
    }

    public function course_add()
    {
        $name           = $this->input->post('course_name');
        $description    = $this->input->post('course_description');
        $duration       = $this->input->post('course_duration');
        $status         = 'active';
        $course_img     = "";
        if (!empty($_FILES['course_img']['name'][0])) {
            $course_img_data = $this->upload_files('./uploads/course_img/', 'course_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $course_img = '/uploads/course_img/' . $course_img_data['file_name'];
        }
        
        $insert_course = [
            "uid"                   => $this->generate_uid(UID_COURSE),
            "course_name"           => $name,
            "course_description"    => $description,
            "duration"              => $duration,
            "image"                 => $course_img,
            "status"                => $status,
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_course = $this->Pages_model->add_new_course($insert_course);

        if ($add_new_course) {
            redirect('admin/courses');
        }
        
    }

    public function delete_course(){
        $this->init_model(MODEL_PAGES);
        $id = $this->input->get('id');
        $data = $this->Pages_model->delete_course($id);
        if($data){
            redirect('admin/courses');
        }
        
    }

    public function update_course()
    {
        $id = $this->input->get('id');
        $title = $this->input->post('course_name');
        $description = $this->input->post('course_description');
        $duration       = $this->input->post('course_duration');

        $this->init_model(MODEL_PAGES);
        $update_data = [
            "course_name" => $title,
            "course_description" => $description,
            "duration" => $duration,
        ];
        if (!empty($_FILES['course_img']['name'][0])) {
            $blog_img_data = $this->upload_files('./uploads/course_img/', 'course_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $update_data['image'] = '/uploads/course_img/' . $blog_img_data['file_name'];
        }
        $update = $this->Pages_model->update_course($id, $update_data);
        if($update){
            redirect('admin/courses');
        }
        

    }

    public function add_new_notice()
    {
        $title           = $this->input->post('notice_title');
        $description    = $this->input->post('notice_description');
        $status         = 'active';
        
        $insert_notice = [
            "uid"            => $this->generate_uid(UID_NOTICE),
            "title"          => $title,
            "description"    => $description,
            "status"         => $status,
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_notice = $this->Pages_model->add_new_notice($insert_notice);

        if ($add_new_notice) {
            redirect('admin/notices');
        }
    }

    public function delete_notice(){
        $this->init_model(MODEL_PAGES);
        $id = $this->input->get('id');
        $data = $this->Pages_model->delete_notice($id);
        if($data){
            redirect('admin/notices');
        }
        
    }

    public function update_notice()
    {
        $id = $this->input->get('id');
        $title = $this->input->post('notice_title');
        $description = $this->input->post('notice_description');

        $this->init_model(MODEL_PAGES);
        $update_data = [
            "title"           => $title,
            "description"    => $description,
        ];
        $update = $this->Pages_model->update_notice($id, $update_data);
        if($update){
            redirect('admin/notices');
        }
        

    }

    public function enrole_for_course()
    {
        $id = $this->input->post('id');
        $uid = $this->session->userdata(SES_STUDENT_ID);
        $email = $this->session->userdata(SES_STUDENT_EMAIL);
        $type = $this->session->userdata(SES_TYPE);
        
        if(!empty($uid) && !empty($email) && $type == 'student'){
            $insert_data = [
                "uid" => $this->generate_uid(UID_ENROLED),
                "course_id" => $id,
                "user_id" => $uid,
                "user_email" => $email,
            ];
            $this->init_model(MODEL_PAGES);
            $add_new_enrolement = $this->Pages_model->add_new_enrolement($insert_data);
    
            if ($add_new_enrolement) {
                return json_encode(array("status"=> true, "msg" =>'success' ));
            }else{
                return json_encode(array("status"=> true, "msg" =>'faild' ));
            }
        }else{
            echo json_encode(array("status"=> false, "msg" =>'Please login!' ));
        }
    }

    public function creat_new_numbers(){
        $student            = $this->input->post('student_id');
        $course             = $this->input->post('course_id');
        $subject            = $this->input->post('subject');
        $th_numberr         = $this->input->post('theory_marks');
        $practical_number   = $this->input->post('practical_marks');
        $total              = $this->input->post('total');
        $from              = $this->input->post('from');
        $to                 = $this->input->post('to');

        $insert_data = [];
        $grand_total ="";
        $len = count($subject);
        foreach($subject as $key=>$sub){
            $grand_total = intval($grand_total) + intval($total[$key]);
        }
        $parcentage = ($grand_total/($len*100))*100;
        foreach($subject as $key=>$sub){
            $insert_data[] = array(
                "uid" => $this->generate_uid(UID_RESULT),
                "students_id" => $student[0],
                "course_id" => $course[0],
                "subject" => $sub,
                "th_marks" => $th_numberr[$key],
                "practical_marks" => $practical_number[$key],
                "total" => $total[$key],
                "grand_total" => $grand_total,
                "parcentage" => $parcentage,
                "start_date" => $from[0],
                "end_date" => $to[0],
            );
        }
        // $this->prd($insert_data);

        $this->init_model(MODEL_PAGES);
        $add_new_result = $this->Pages_model->add_new_result($insert_data);

        if ($add_new_result) {
            redirect('admin/results');
        }

    }


    public function update_user(){
        $user_id = $this->input->get('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $update_data=[
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
        ];
        $this->init_model(MODEL_PAGES);
        $update_data = $this->Pages_model->update_user($user_id, $update_data);
        redirect('edit-profile');
    }

    public function update_user_profile_img(){
        $user_id = $this->input->get('id');
        $user_img = "";
        if (!empty($_FILES['profile_image']['name'][0])) {
            $user_img_data = $this->upload_files('./uploads/users_img/', 'profile_image', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $user_img = '/uploads/users_img/' . $user_img_data['file_name'];
        }
        $this->init_model(MODEL_PAGES);
        $update_data = $this->Pages_model->update_user_profile_img($user_id, $user_img);
        redirect('edit-profile');
    }

    public function add_get_in_touch()
    {
        $name           = $this->input->post('name');
        $email          = $this->input->post('email');
        $phone          = $this->input->post('phone');
        $address        = $this->input->post('address');
        $message        = $this->input->post('message');
        // $this->prd($message);
        $insert_data = [
            "uid"           => $this->generate_uid(UID_GET_IN_TOUCH),
            "name"          => $name,
            "email"         => $email,
            "phone"         => $phone,
            "address"       => $address,
            "message"       => $message,
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_data = $this->Pages_model->add_get_in_touch($insert_data);

        if ($add_new_data) {
            redirect('contact');
        }
    }

    public function course(){
        $id = $this->input->post('id');
        
        $this->init_model(MODEL_PAGES);
        $data = PAGE_DATA_WEB;
        // $data['data_header']['franchise_list'] = true;
        $data['data_page']['course'] = $this->Pages_model->get_course_by_id($id);
        $this->load_page('web/course.php',$data);
    }

    public function add_new_testimonial()
    {
        $name           = $this->input->post('name');
        $type          = $this->input->post('type');
        $description          = $this->input->post('description');
        $testimonial_img = "";
        if (!empty($_FILES['testimonial_img']['name'][0])) {
            $testimonial_img_data = $this->upload_files('./uploads/testimonial_img/', 'testimonial_img', IMG_FILE_TYPES, IMG_FILE_SIZE);
            $testimonial_img = '/uploads/testimonial_img/' . $testimonial_img_data['file_name'];
        }
        $insert_data = [
            "uid"           => $this->generate_uid(UID_TESTIMONIAL),
            "name"          => $name,
            "type"          => $type,
            "description"   => $description,
            "img"           => $testimonial_img,
        ];

        $this->init_model(MODEL_PAGES);
        $add_new_data = $this->Pages_model->add_testimonial($insert_data);

        if ($add_new_data) {
            redirect('admin/testimonial');
        }
    }

}