</head>

<body>

    <div class="main-wrapper">

        <header class="header">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav scroll-sticky add-header-bg" >
                    <div class="container" style="display: contents;">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="https://dreamslms.dreamstechnologies.com/laravel/public" class="navbar-brand logo">
                                <img src="<?php echo base_url()?>assets/img/logo.svg" class="img-fluid" alt="Logo">
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
                            <ul class="main-nav">
                                <li class="has-submenu <?= isset($home) ? 'active' : '' ?>">
                                    <a class="" href="<?php echo base_url('home')?>">Home</a>
                                </li>
                                <li class="has-submenu <?= isset($about) ? 'active' : '' ?>">
                                    <a href="<?php echo base_url('about-us')?>">About Us </a>
                                </li>
                                <?php if($user_type == 'centre'){?>
                                <!-- <li class="has-submenu <?= isset($franchise_list) ? 'active' : '' ?>">
                                    <a href="<?php echo base_url('franchise-list')?>">Franchise List </a>
                                </li> -->
                                <li class="has-submenu ">
                                    <a class="">Franchise Area <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class=""><a href="<?php echo base_url('franchise-list')?>">Franchise List</a></li>
                                        <li class=""><a href="<?php echo base_url('get-certificate-centre')?>">Cirtificate</a></li>
                                    </ul>
                                </li>
                                <?php }?>
                                <li class="has-submenu <?= isset($online_registration) ? 'active' : '' ?>">
                                    <a href="<?php echo base_url('online-registration')?>">Franchise Registration </a>
                                </li>
                                <li class="has-submenu <?= isset($student_admission) ? 'active' : '' ?>">
                                    <a href="<?php echo base_url('student-admission')?>">Student Admission </a>
                                </li>
                                <?php if($user_type == 'student'){?>
                                <li class="has-submenu ">
                                    <a class="">Cirtificates <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class=""><a >Marksheet</a></li>
                                        <li class=""><a id="loginBtn">Cirtificate</a></li>
                                    </ul>
                                </li>
                                <?php }?>
                                <li class="has-submenu <?= isset($franchise_list) ? 'active' : '' ?>">
                                    <a href="<?php echo base_url('contact')?>">Contact </a>
                                </li>
                                



                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht">
                            <!-- <li class="nav-item">
                                <a class="nav-link header-sign" href="login.html">Signin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-sign" href="<?= base_url('admin/student-logout')?>">Signout</a>
                            </li> -->
                            <li class="nav-item user-nav">
                                <a href="<?php echo base_url('edit-profile')?>" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <?php if($user_img != null){?>
                                        <img src="<?=base_url($user_img['img'])?>" alt="">
                                        <?php }else{?>
                                        <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813" alt="">
                                        <?php }?>
                                        <span class="status online"></span>
                                    </span>
                                </a>
                                <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <!-- <img src="<?=base_url()?>assets/img/instructor/profile-avatar.jpg" alt="User Image"
                                                class="avatar-img rounded-circle"> -->
                                                <?php if($user_img != null){?>
                                                <img src="<?=base_url($user_img['img'])?>" alt="" class="avatar-img rounded-circle">
                                                <?php }else{?>
                                                <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813" alt="">
                                                <?php }?>
                                        </div>
                                        <div class="user-text">
                                        <?php if($user_img != null){?>
                                            <h6><?= $user_img['name']?></h6>
                                            <p class="text-muted mb-0"><?= $user_img['role']?></p>
                                        <?php }?>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="instructor-dashboard.html"><i
                                            class="feather-home me-1"></i> Dashboard</a>
                                    <a class="dropdown-item" href="<?php echo base_url('edit-profile')?>"><i
                                            class="feather-star me-1"></i> Edit Profile</a>
                                    <div class="dropdown-item night-mode">
                                        <span><i class="feather-moon me-1"></i> Night Mode </span>
                                        <div class="form-check form-switch check-on m-0">
                                            <input class="form-check-input" type="checkbox" id="night-mode">
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="<?= base_url('admin/student-logout')?>"><i class="feather-log-out me-1"></i>
                                        Logout</a>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </nav>
                <!-- <div class="breadcrumb-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="breadcrumb-list">
                                <nav aria-label="breadcrumb" class="page-breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Pages</li>
                                        <li class="breadcrumb-item" aria-current="page">Instructors List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
        </header>
<script>
    $(document).ready(function () {
        var base_url = 'http://localhost/student_website/'
        $('#loginBtn').click(function () {
            $.ajax({
                type: "GET",
                url: base_url+'web/Load/get_student_details',
                success: function(response){
                    // console.log(response)
                    resp = JSON.parse(response)
                    if (resp.status) {
                        console.log(resp)
                        location.href = '<?= base_url('get-cirtificate') ?>'
                    }else{
                        alert('User Not Found!')
                    }
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
            
        })

    });
</script>