<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'web/load';
$route['404_override']          = 'errors/custom_404';
$route['translate_uri_dashes']  = FALSE;



// ============================ web routes
$route['home']                          = 'web/load';
$route['about-us']                      = 'web/load/about_us';
$route['contact']                       = 'web/load/contact_us';
$route['online-registration']           = 'web/load/online_registration';
$route['student-admission']             = 'web/load/student_admission';
$route['franchise-list']                = 'web/load/franchise_list';
// $route['course']                        = 'web/load/course';
$route['cirtificate']                   = 'web/load/cirtificate';
$route['get-cirtificate']               = 'web/load/get_cirtificate';
$route['admin/student-logout']          = 'admin/Admin/student_logout';
$route['edit-profile']                  = 'web/load/edit_profile';
$route['get-certificate-centre']        = 'web/load/get_cirtificate_centre';
$route['certificate-centre']            = 'web/load/cirtificate_centre';
$route['marksheet']                     = 'web/load/marksheet';


// ============================ admin routes
$route['admin']                     = 'admin/Admin/index';
$route['admin/login']               = 'admin/Admin/login';
$route['admin/logout']              = 'admin/Admin/logout';
$route['admin/dashboard']           = 'admin/Admin/dashboard';
$route['admin/gallery']             = 'admin/Admin/gallery';
///////////////////////////////////////////////////////////////
$route['admin/home']                = 'admin/Pages/home';
$route['admin/centres']             = 'admin/Pages/admin_centres';
$route['admin/students']            = 'admin/Pages/admin_students';
$route['admin/courses']             = 'admin/Pages/courses';
$route['admin/add-cources']         = 'admin/Pages/cource_add';
$route['admin/notices']             = 'admin/Pages/notices';
$route['admin/add-notice']          = 'admin/Pages/notice_add';
$route['admin/results']             = 'admin/Pages/results';
$route['admin/creat-result']        = 'admin/Pages/creat_result';
$route['admin/get-in-touches']      = 'admin/Pages/get_in_touches';
$route['admin/enroled-courses']     = 'admin/Pages/enroled_courses';
$route['admin/testimonial']         = 'admin/Pages/testimonial';
$route['admin/testimonial-add']     = 'admin/Pages/testimonial_add';



