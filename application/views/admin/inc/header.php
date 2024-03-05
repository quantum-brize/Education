</head>

<body>

    <div class="main-wrapper">

        <header class="header header-page">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="https://dreamslms.dreamstechnologies.com/laravel/public" class="navbar-brand logo">
                                <img src="<?=base_url()?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="https://dreamslms.dreamstechnologies.com/laravel/public" class="menu-logo">
                                    <img src="<?php echo base_url()?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="nav header-navbar-rht">
                            <li class="nav-item user-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="<?=base_url($user_img['img'])?>" alt="">
                                        <span class="status online"></span>
                                    </span>
                                </a>
                                <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="<?=base_url($user_img['img'])?>" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6><?= $user_img['name']?></h6>
                                            <p class="text-muted mb-0"><?= $user_img['role']?></p>
                                        </div>
                                    </div>
                                    <!-- <a class="dropdown-item" href="instructor-dashboard.html"><i
                                            class="feather-home me-1"></i> Dashboard</a>
                                    <a class="dropdown-item" href="instructor-edit-profile.html"><i
                                            class="feather-star me-1"></i> Edit Profile</a> -->
                                    <!-- <div class="dropdown-item night-mode">
                                        <span><i class="feather-moon me-1"></i> Night Mode </span>
                                        <div class="form-check form-switch check-on m-0">
                                            <input class="form-check-input" type="checkbox" id="night-mode">
                                        </div>
                                    </div> -->
                                    <a class="dropdown-item" href="<?= base_url('admin/logout')?>"><i class="feather-log-out me-1"></i>
                                        Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="page-content instructor-page-content">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                        <!-- <div class="settings-widget dash-profile">
                            <div class="settings-menu p-0">
                                <div class="profile-bg">
                                    <h5>Beginner</h5>
                                    <img src="<?=base_url()?>assets/img/instructor-profile-bg.jpg" alt="">
                                    <div class="profile-img">
                                        <a href="instructor-profile.html"><img src="<?=base_url()?>assets/img/user/user15.jpg"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-group">
                                    <div class="profile-name text-center">
                                        <h4><a href="instructor-profile.html">Jenny Wilson</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                    <div class="go-dashboard text-center">
                                        <a href="add-course.html" class="btn btn-primary">Create New Course</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="settings-widget account-settings">
                            <div class="settings-menu">
                                <h3>DASHBOARD</h3>
                                <ul>
                                    <li class="nav-item ">
                                        <a class="<?= isset($home) ? 'active' : '' ?>" href="<?= base_url('admin/home')?>" class="nav-link">
                                            <i class="feather-home"></i> My Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($centres) ? 'active' : '' ?>" href="<?= base_url('admin/centres')?>" class="nav-link">
                                            <i class="feather-book"></i> Centres
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($student_list) ? 'active' : '' ?>" href="<?= base_url('admin/students')?>" class="nav-link">
                                            <i class="feather-star"></i> Students
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($courses) ? 'active' : '' ?>" href="<?= base_url('admin/courses')?>" class="nav-link">
                                            <i class="feather-pie-chart"></i> Courses
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($notices) ? 'active' : '' ?>" href="<?= base_url('admin/notices')?>" class="nav-link">
                                            <i class="feather-shopping-bag"></i> Notices
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($results) ? 'active' : '' ?>" href="<?= base_url('admin/results')?>" class="nav-link">
                                            <i class="feather-users"></i> Results
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($get_in_touch) ? 'active' : '' ?>" href="<?= base_url('admin/get-in-touches')?>" class="nav-link">
                                            <i class="feather-users"></i> Get In Touch
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="<?= isset($enroled_courses) ? 'active' : '' ?>" href="<?= base_url('admin/enroled-courses')?>" class="nav-link">
                                            <i class="feather-users"></i> Enroled Courses
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-payouts.html" class="nav-link">
                                            <i class="feather-dollar-sign"></i> Payouts
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-tickets.html" class="nav-link">
                                            <i class="feather-server"></i> Support Tickets
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="instructor-title">
                                    <h3>ACCOUNT SETTINGS</h3>
                                </div>
                                <ul>
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-edit-profile.html" class="nav-link ">
                                            <i class="feather-settings"></i> Edit Profile
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-security.html" class="nav-link">
                                            <i class="feather-user"></i> Security
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-social-profiles.html" class="nav-link">
                                            <i class="feather-refresh-cw"></i> Social Profiles
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-notification.html" class="nav-link">
                                            <i class="feather-bell"></i> Notifications
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-profile-privacy.html" class="nav-link">
                                            <i class="feather-lock"></i> Profile Privacy
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-delete-profile.html" class="nav-link">
                                            <i class="feather-trash-2"></i> Delete Profile
                                        </a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="" href="instructor-linked-account.html" class="nav-link">
                                            <i class="feather-user"></i> Linked Accounts
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="" href="<?= base_url('admin/logout')?>" class="nav-link">
                                            <i class="feather-power"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="settings-widget">
                                <div class="settings-inner-blk p-0">