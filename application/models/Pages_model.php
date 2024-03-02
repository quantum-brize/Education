<?php
defined('BASEPATH') or exit('nothing found');
require_once(APPPATH . 'models/Admin_model.php');

class Pages_model extends Admin_model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }

    public function add_admin($insert_users){
        $add_user = $this->db->insert(TABLE_USER, $insert_users);
        if($add_user){
            return $add_user;
        }
    }
    public function add_new_centre($insert_users, $insert_centre, $insert_address)
    {
        $add_user = $this->db->insert(TABLE_USER, $insert_users);
        if($add_user){
            $add_centre = $this->db->insert(TABLE_CENTRE, $insert_centre);
            if($add_centre){
                $add_address = $this->db->insert(TABLE_ADDRESS, $insert_address);
                if($add_address){
                    return $add_address;  
                }
            }
        }
    }

    public function add_new_student($insert_users, $insert_student, $insert_address)
    {
        $add_user = $this->db->insert(TABLE_USER, $insert_users);
        if($add_user){
            $add_student = $this->db->insert(TABLE_STUDENT, $insert_student);
            if($add_student){
                $add_address = $this->db->insert(TABLE_ADDRESS, $insert_address);
                if($add_address){
                    return $add_address;  
                }
            }
        }
    }

    public function get_all_centres() {
        $this->db->select('u.*, cn.uid as centre_id,cn.franchise_type,cn.centre_name, ad.state,ad.district,ad.vill_city,ad.block,cn.contact');
        $this->db->from('users as u');
        $this->db->join('centre as cn', 'cn.user_id = u.uid');
        $this->db->join('address as ad', 'ad.user_id = u.uid');
        $this->db->where('u.role', 'centre');
        $query = $this->db->get();
        $donations = $query->result_array();
        // $this->prd($donations);
        return !empty($donations) ? $donations : [];
        
    }

    public function update_centre_status($user_id, $status)
    {
        $data = [
            'status' => $status,
        ];
        $update = $this->db->where('uid', $user_id)
            ->update(TABLE_USER, $data);
        return $update;
    }

    public function get_all_students() {
        $this->db->select('u.*, st.marks_in_parcentage,st.whatsapp_no,st.last_qualification, ad.state,ad.district,ad.vill_city,ad.block');
        $this->db->from('users as u');
        $this->db->join('student as st', 'st.user_id = u.uid');
        $this->db->join('address as ad', 'ad.user_id = u.uid');
        $this->db->where('u.role', 'student');
        $query = $this->db->get();
        $donations = $query->result_array();
        // $this->prd($donations);
        return !empty($donations) ? $donations : [];
    }

    public function add_new_course($insert_course)
    {
        $add_course = $this->db->insert(TABLE_COURSE, $insert_course);
        if($add_course){
            return $add_course;
        }
    }

    public function get_all_courses()
    {

        $courses = $this->db
            ->select('*')
            ->from(TABLE_COURSE)
            ->get();

        $courses = $courses->result_array();
        return isset($courses) ? $courses : [];
    }

    public function delete_course($id){
        $delete = $this->db->where('uid', $id)
            ->delete(TABLE_COURSE);
        return $delete;
    }

    public function add_new_notice($insert_notice)
    {
        $add_notice = $this->db->insert(TABLE_NOTICE, $insert_notice);
        if($add_notice){
            return $add_notice;
        }
    }

    public function get_all_notices()
    {

        $notices = $this->db
            ->select('*')
            ->from(TABLE_NOTICE)
            ->get();

        $notices = $notices->result_array();
        return isset($notices) ? $notices : [];
    }

    public function delete_notice($id){
        $delete = $this->db->where('uid', $id)
            ->delete(TABLE_NOTICE);
        return $delete;
    }

    public function get_course_by_id($id)
    {
        $course = $this->db->select('*')
        ->from(TABLE_COURSE)
        ->where('uid', $id)
        ->get()
        ->row_array();
        return !empty($course) ? $course : [];
    }

    public function update_course($id, $update_data)
    {
        $update = $this->db->where('uid', $id)
            ->update(TABLE_COURSE, $update_data);
        return $update;
    }

    public function get_notice_by_id($id)
    {
        $notice = $this->db->select('*')
        ->from(TABLE_NOTICE)
        ->where('uid', $id)
        ->get()
        ->row_array();
        return !empty($notice) ? $notice : [];
    }

    public function update_notice($id, $update_data)
    {
        $update = $this->db->where('uid', $id)
            ->update(TABLE_NOTICE, $update_data);
        return $update;
    }

    public function add_new_enrolement($insert_data)
    {
        $add_data = $this->db->insert(TABLE_ENROLED_COURSE, $insert_data);
        if($add_data){
            return $add_data;
        }
    }

    public function add_new_result($insert_data)
    {
        $add_result = $this->db->insert_batch(TABLE_RESULTS, $insert_data);
        if($add_result){
            return $add_result;
        }
    }

    public function get_all_results() {
        $this->db->select('u.uid as user_id,u.name,u.email,u.phone,c.course_name,rs.uid,rs.subject,rs.th_marks,rs.practical_marks,rs.total,rs.grand_total');
        $this->db->from('results as rs');
        $this->db->join('course as c', 'c.uid = rs.course_id');
        $this->db->join('users as u', 'u.uid = rs.students_id');
        $query = $this->db->get();
        $donations = $query->result_array();
        // $this->prd($donations);
        return !empty($donations) ? $donations : [];
        
    }

    public function get_student_marks_by_id($id) {
        $this->db->select('u.uid as user_id,u.name,rs.*, c.course_name');
        $this->db->from('results as rs');
        $this->db->join('course as c', 'c.uid = rs.course_id');
        $this->db->join('users as u', 'u.uid = rs.students_id');
        $this->db->join('student as s', 'u.uid = s.user_id');
        $this->db->where('rs.students_id', $id);
        $query = $this->db->get();
        $donations = $query->result_array();
        // $this->prd($donations);
        return !empty($donations) ? $donations : [];
        
    }

    public function get_student_details_by_id($id) {
        $this->db->select('u.*, rs.*,c.*,s.*');
        $this->db->from('results as rs');
        $this->db->join('course as c', 'c.uid = rs.course_id');
        $this->db->join('users as u', 'u.uid = rs.students_id');
        $this->db->join('student as s', 'u.uid = s.user_id');
        $this->db->where('rs.students_id', $id);
        $query = $this->db->get();
        $donations = $query->result_array();
        // $this->prd($donations);
        return !empty($donations) ? $donations : [];
        
    }

    public function get_user_by_id($id)
    {
        $user = $this->db->select('*')
        ->from(TABLE_USER)
        ->where('uid', $id)
        ->get()
        ->row_array();
        return !empty($user) ? $user : [];
    }

    public function get_user_img_by_id($id)
    {
        $user = $this->db->select('img, name, role')
        ->from(TABLE_USER)
        ->where('uid', $id)
        ->get()
        ->row_array();
        return !empty($user) ? $user : [];
    }

    public function update_user($user_id, $update_data){
        $update = $this->db->where('uid', $user_id)
            ->update(TABLE_USER, $update_data);
        return $update;
    }

    public function update_user_profile_img($user_id, $user_img){
        $update_data = [
            "img" => $user_img
        ];
        $update = $this->db->where('uid', $user_id)
            ->update(TABLE_USER, $update_data);
        return $update;
    }

    public function get_centre_details_by_id($id) {
        $this->db->select('u.*, cn.*, ad.contact as residential_contact');
        $this->db->from('users as u');
        $this->db->join('centre as cn', 'cn.user_id = u.uid');
        $this->db->join('address as ad', 'ad.user_id = u.uid');
        $this->db->where('u.uid', $id);
        $query = $this->db->get();
        $donations = $query->row_array();
        // $this->prd($donations);
        return !empty($donations) ? $donations : [];
        
    }


    public function add_get_in_touch($insert_data)
    {
        $add_data = $this->db->insert(TABLE_GET_IN_TOUCH, $insert_data);
        if($add_data){
            return $add_data;
        }
    }

    public function get_all_get_in_touches()
    {
        $notices = $this->db
            ->select('*')
            ->from(TABLE_GET_IN_TOUCH)
            ->get();

        $notices = $notices->result_array();
        return isset($notices) ? $notices : [];
    }


    public function get_all_enroled_courses() {
        $this->db->select('u.*, c.*');
        $this->db->from('enroled_course as ec');
        $this->db->join('users as u', 'u.uid = ec.user_id');
        $this->db->join('course as c', 'c.uid = ec.course_id');
        $query = $this->db->get();
        $enroled_courses = $query->result_array();
        // $this->prd($donations);
        return !empty($enroled_courses) ? $enroled_courses : [];
        
    }

}