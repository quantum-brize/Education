<?php 
defined('BASEPATH') or exit('nothing found');
require_once(APPPATH . 'models/Common_model.php');

class Admin_model extends Common_model {

    public function __construct(){
        parent::__construct();
        date_default_timezone_set(field_location);  
    }


    public function is_admin($email, $password){
        $admin = $this->db
                        ->select('email,uid, role, status')
                        ->from(TABLE_USER)
                        ->where('email', $email)
                        ->where('password', $password)
                        ->where('status', 'active')
                        ->get();

        $admin = $admin->result_array();

        return isset($admin[0]) ? $admin[0]: [];

    }

}

?>