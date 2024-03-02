<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('SHOW_DEBUG_BACKTRACE', TRUE);
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);
define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
define('rest_controller_path', 'libraries/RestController.php');
define('DATA', 'data');
define('HTTP_STATUS', 'http_status');
define('key_status', 'status');
define('key_message', 'message');
define('key_data', 'data');
define('http_ok', 200);
define('header_allow_origin', 'Access-Control-Allow-Origin: *');
define('header_allow_headers', 'Access-Control-Allow-Headers: *');
define('header_allow_methods', "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE, PATCH");
define('helper_form', 'form');
define('helper_url', 'url');
define('field_date', 'Y-m-d');
define('field_date_time', 'Y-m-d H:i:s');
define('field_location', 'Asia/Kolkata');



//////////////////////////////////////////////__URL
// define('BASE_URL', 'https://daltonusstore.com');
define('BASE_URL', 'http://localhost/student_website/');

//////////////////////////////////////////////__PAGEDATA
define('PAGE_DATA_WEB', ['data_page' => [], 'data_header' => ['header_link' => [], 'title' => '', 'projects' => [], 'header' => [], 'sidebar' => [], 'site' => 'web'], 'data_footer' => ['footer_link' => [], 'footer' => [], 'site' => 'web']]);
define('PAGE_DATA_ADMIN', ['data_page' => [], 'data_header' => ['header_link' => [], 'title' => '', 'header' => [], 'sidebar' => [], 'site' => 'admin'], 'data_footer' => ['footer_link' => [], 'footer' => [], 'site' => 'admin']]);

/////////////////////////////////////////////__IMG_UPLOAD_CONFIG
define('IMG_FILE_TYPES', 'gif|jpg|png|JPG|jpeg|JPEG|PNG');
define('IMG_FILE_SIZE', 5048);

/////////////////////////////////////////////__MODELS
define('MODEL_COMMON', 'Common_model');
define('MODEL_ADMIN', 'Admin_model');
define('MODEL_PAGES', 'Pages_model');

////////////////////////////////////////////__TABLES
define('TABLE_USER', 'users');
define('TABLE_CENTRE', 'centre');
define('TABLE_ADDRESS', 'address');
define('TABLE_STUDENT', 'student');
define('TABLE_COURSE', 'course');
define('TABLE_NOTICE', 'notices');
define('TABLE_ENROLED_COURSE', 'enroled_course');
define('TABLE_RESULTS', 'results');
define('TABLE_GET_IN_TOUCH', 'get_in_touch');


////////////////////////////////////////////__SESSION_VARS
define('SES_ADMIN_ID', 'admin_id');
define('SES_ADMIN_NAME', 'admin_name');
define('SES_SUB_ADMIN_ID', 'sub_admin_id');
define('SES_SUB_ADMIN_NAME', 'sub_admin_name');
define('SES_CENTRE_ID', 'centre_id');
define('SES_CENTRE_EMAIL', 'centre_email');
define('SES_STUDENT_ID', 'student_id');
define('SES_STUDENT_EMAIL', 'student_email');
define('SES_TYPE', 'type');
define('SES_TYPE_STUDENT', 'type_student');

////////////////////////////////////////////__USERS
define('USER_ADMIN', 'admin');
define('USER_SUB_ADMIN', 'sub_admin');
define('USER_STUDENT', 'student');
define('USER_CENTRE', 'centre');


////////////////////////////////////////////__KEYS
define("KEY_STATUS", "status");
define("KEY_MESSAGE", "message");
define("KEY_TYPE", "role");
define('KEY_USER_NAME', 'name');
define('KEY_EMAIL', 'email');
define('KEY_UID', 'uid');

///////////////////////////////////////////__UID-PREFIX
define('UID_USER', 'USER');
define('UID_CENTRE', 'CENTRE');
define('UID_ADDRESS', 'ADRS');
define('UID_STUDENT', 'STU');
define('UID_COURSE', 'CRS');
define('UID_NOTICE', 'NOT');
define('UID_ENROLED', 'ENROL');
define('UID_RESULT', 'RS');
define('UID_GET_IN_TOUCH', 'GNT');



//////////////////////////////////////////__UID
define('GALLERY_UID', 'GAL67890RTY78TY');



/////////////////////////////////////////__RAZORPAY_SECRET_KEY
define('RAZORPAY_KEY_TEST_SECRET', 'rqaB1PDEZvHE7cY6FpJlYzve');
define('RAZORPAY_KEY_TEST_ID',  'rzp_test_CU0ppPGU4Lrll0');

define('RAZORPAY_KEY_LIVE_SECRET', '');
define('RAZORPAY_KEY_LIVE_ID', '');