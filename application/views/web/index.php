<style>
    .scroll-text {
        overflow: hidden;
        height: 100px; /* Adjust height as needed */
    }

    .scroll-text p {
        animation: scroll 10s linear infinite; /* Adjust duration as needed */
    }

    @keyframes scroll {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-100%);
        }
    }
    @media only screen and (max-width: 768px) {
        #con_bx{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #con_bx .text-center{
            width: 350px;
            /* transform: translateX(); */
        }
        .col-lg-4 .col-md-6 .d-flex{
            align-items: center;
            justify-content: center;
            transform: translateX(-30%);
        }
    }
</style>
<section class="home-slide d-flex align-items-center">
    <div class="container">
        <div class="row ">
            <div class="col-md-7">
                <div class="home-slide-face aos">
                    <div class="home-slide-text ">
                        <h5>The Leader in Online Learning</h5>
                        <h1>Engaging & Accessible Online Courses For All</h1>
                    </div>
                    <div class="banner-content">
                        <form class="form" method="POST" action="<?php echo base_url('admin/Pages/course')?>">
                            <div class="form-inner">
                                <div class="input-group">
                                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                                    <input type="email" class="form-control"
                                        placeholder="Search courses.">
                                    <span class="drop-detail">
                                        <select class="form-select select" name="id">
                                        <option>Courses</option>
                                        <?php
                                        if(!empty($courses)){
                                        foreach($courses as $course){
                                        ?>
                                            <option value="<?= $course['uid']?>"><?= $course['course_name']?></option>
                                        <?php }}?>
                                        </select>
                                    </span>
                                    <button class="btn btn-primary sub-btn" type="submit"><i
                                            class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="trust-user">
                        <p>Trusted by over 15K Users <br>worldwide since 2023</p>
                        <div class="trust-rating d-flex align-items-center">
                            <div class="rate-head">
                                <h2><span>1000</span>+</h2>
                            </div>
                            <div class="rating d-flex align-items-center">
                                <h2 class="d-inline-block average-rating">4.4</h2>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-center">
                <div class="girl-slide-img aos">
                    <img src="<?php echo base_url('assets/img/object.png')?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section student-course">
    <div class="container">
        <div class="course-widget">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="course-full-width">
                        <div class="blur-border course-radius align-items-center aos">
                            <div class="online-course d-flex align-items-center">
                                <div class="course-img">
                                    <img src="assets/img/pencil-icon.svg" alt="">
                                </div>
                                <div class="course-inner-content">
                                    <h4><span>10</span>K</h4>
                                    <p>Online Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="course-full-width">
                        <div class="blur-border course-radius aos">
                            <div class="online-course d-flex align-items-center">
                                <div class="course-img">
                                    <img src="assets/img/cources-icon.svg" alt="">
                                </div>
                                <div class="course-inner-content">
                                    <h4><span>200</span>+</h4>
                                    <p>Expert Tutors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="course-full-width">
                        <div class="blur-border course-radius aos">
                            <div class="online-course d-flex align-items-center">
                                <div class="course-img">
                                    <img src="assets/img/certificate-icon.svg" alt="">
                                </div>
                                <div class="course-inner-content">
                                    <h4><span>6</span>K+</h4>
                                    <p>Ceritified Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="course-full-width">
                        <div class="blur-border course-radius aos">
                            <div class="online-course d-flex align-items-center">
                                <div class="course-img">
                                    <img src="assets/img/gratuate-icon.svg" alt="">
                                </div>
                                <div class="course-inner-content">
                                    <h4><span>60</span>K +</h4>
                                    <p>Online Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section how-it-works">
    <div class="container">
        <div class="section-header aos justify-content-center align-items-center">
            <div class="section-sub-head">
                <h2>About Us</h2>
            </div>
        </div>
        <div class="section-header aos justify-content-center align-items-center">
            <div class="section-text aos">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas
                    augue elementum et neque. Suspendisse imperdiet.</p>
            </div>
        </div>
        <div class="row owl mentoring-course owl-theme aos" id="con_bx">
            <div class="text-center col-4 scr">
            <div class="feature-text text-black">NOTICE</div>
                <div class="feature-bg text-white" style="height: 300px; overflow-y: hidden; background: #413655;">
                    <?php 
                    if(!empty($notices)){
                    foreach($notices as $notice){
                    ?>
                    <div class="feature-header" style="animation: scroll 10s linear infinite;">
                        <div class="feature-cont">
                            <div class="feature-text"><?= $notice['title']?></div>
                        </div>
                        <p class="text-white"><?= $notice['description']?></p>
                    </div>
                    
                <?php }}?>
                </div>
            </div>
            <div class="text-center col-4">
            <div class="feature-text text-black">CENTRE_LOGIN</div>
                <div class="feature-bg text-white" style="height: 300px; overflow-y: hidden; background: #413655;">
                    <div class="feature-header">
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" name="userEmail" id="userEmailCentre" required>
                            <div class="text-danger pt-2"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" name="password" id="passwordCentre" required>
                                <span class="feather-eye-off toggle-password"></span>
                                <!-- <span class="feather-eye-off toggle-password" onclick="togglePassword()">👁️</span> -->
                                <div class="text-danger pt-2">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button id="CentreloginBtn" class="btn btn-primary btn-start">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center col-4">
                <div class="feature-text text-black">STUDENT_LOGIN</div>
                <div class="feature-bg text-white" style="height: 300px; overflow-y: hidden; background: #413655;">
                    <div class="feature-header">
                    <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" name="userEmail" id="userEmailStudent" required>
                            <div class="text-danger pt-2"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" name="password" id="passwordStudent" required>
                                <span class="feather-eye-off toggle-password"></span>
                                <div class="text-danger pt-2">
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button id="StudentloginBtn" class="btn btn-primary btn-start">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section new-course">
            <div class="container">
                <div class="section-header aos" data-aos="fade-up">
                    <div class="section-sub-head">
                        <span>What’s New</span>
                        <h2>Featured Courses</h2>
                    </div>
                </div>
                <div class="section-text aos" data-aos="fade-up">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                        bibendum
                        gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                </div>
                <div class="course-feature">
                    <div class="row">
                        <?php 
                    if(!empty($courses)){
                    foreach($courses as $course){
                    ?>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="course-box d-flex aos carousel-item active">
                        <div class="product">
                            <div class="product-img">
                                <a href="course-details.html">
                                    <img class="img-fluid" alt="" src="<?= base_url($course['image'])?>" style="Height: 200px ; width: 400px ; object-fit : cover">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="course-group d-flex">
                                    <div class="course-group-img d-flex">
                                        <h4><a href="instructor-profile.html"><?= $course['course_name']?></a></h4>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <h3 class="title instructor-text">
                                    <a href="course-details.html"><?= $course['course_description']?></a>
                                </h3>
                                <div class="course-info d-flex align-items-center">
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="<?= base_url('web/Load/course?id='.$course['uid'])?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}?>
                    </div>
                </div>
            </div>
        </section>


<section class="section master-skill">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="section-header aos">
                    <div class="section-sub-head">
                        <span>What’s New</span>
                        <h2>Master the skills to drive your career</h2>
                    </div>
                </div>
                <div class="section-text aos">
                    <p>Get certified, master modern tech skills, and level up your career — whether you’re starting out
                        or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their
                        careers.</p>
                </div>
                <div class="career-group aos">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex">
                            <div class="certified-group blur-border d-flex">
                                <div class="get-certified d-flex align-items-center">
                                    <div class="blur-box">
                                        <div class="certified-img ">
                                            <img src="assets/img/icon/icon-1.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Stay motivated with engaging instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <div class="certified-group blur-border d-flex">
                                <div class="get-certified d-flex align-items-center">
                                    <div class="blur-box">
                                        <div class="certified-img ">
                                            <img src="assets/img/icon/icon-2.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Keep up with in the latest in cloud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <div class="certified-group blur-border d-flex">
                                <div class="get-certified d-flex align-items-center">
                                    <div class="blur-box">
                                        <div class="certified-img ">
                                            <img src="assets/img/icon/icon-3.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Get certified with 100+ certification courses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex">
                            <div class="certified-group blur-border d-flex">
                                <div class="get-certified d-flex align-items-center">
                                    <div class="blur-box">
                                        <div class="certified-img ">
                                            <img src="assets/img/icon/icon-4.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Build skills your way, from labs to courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 d-flex align-items-end">
                <div class="career-img aos">
                    <img src="assets/img/join.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="section trend-course">
    <div class="container">
        <div class="section-header aos">
            <div class="section-sub-head">
                <span>What’s New</span>
                <h2>TRENDING COURSES</h2>
            </div>
            <div class="all-btn all-category d-flex align-items-center">
                <a href="course-list.html" class="btn btn-primary">All Courses</a>
            </div>
        </div>
        <div class="section-text aos">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum
                gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
        </div>


        <div class="feature-instructors">
            <div class="section-header aos">
                <div class="section-sub-head feature-head text-center">
                    <h2>Featured Instructor</h2>
                    <div class="section-text aos">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel instructors-course owl-theme aos" style="display: flex;">
                <div class="instructors-widget">
                    <div class="instructors-img ">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user7.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">David Lee</a></h5>
                        <p>Web Developer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>50 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user8.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Daziy Millar</a></h5>
                        <p>PHP Expert</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group yellow"></i>
                            <span>60 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user9.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                        <p>Web Developer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group violet"></i>
                            <span>50 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user10.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Skyler Whites</a></h5>
                        <p>UI Designer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group orange"></i>
                            <span>40 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img ">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user7.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                        <p>Java Developer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>40 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user8.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">David Lee</a></h5>
                        <p>Web Developer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>50 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img ">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user9.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Daziy Millar</a></h5>
                        <p>PHP Expert</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>40 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img ">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user10.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                        <p>Web Developer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>20 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img ">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user7.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Skyler Whites</a></h5>
                        <p>UI Designer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>30 Students</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget">
                    <div class="instructors-img">
                        <a href="instructor-list.html">
                            <img class="img-fluid" alt="" src="assets/img/user/user8.jpg">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                        <p>Java Developer</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-user-group"></i>
                            <span>40 Students</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> -->
<section class="section trend-course">
            <div class="container">
                <div class="feature-instructors">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head feature-head text-center">
                            <h2>Featured Instructor</h2>
                            <div class="section-text aos" data-aos="fade-up">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean
                                    accumsan
                                    bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel instructors-course owl-theme aos" data-aos="fade-up">
                        <div class="instructors-widget">
                            <div class="instructors-img ">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user7.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">David Lee</a></h5>
                                <p>Web Developer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>50 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user8.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Daziy Millar</a></h5>
                                <p>PHP Expert</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group yellow"></i>
                                    <span>60 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user9.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                                <p>Web Developer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group violet"></i>
                                    <span>50 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user10.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Skyler Whites</a></h5>
                                <p>UI Designer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group orange"></i>
                                    <span>40 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img ">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user7.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                                <p>Java Developer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>40 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user8.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">David Lee</a></h5>
                                <p>Web Developer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>50 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img ">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user9.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Daziy Millar</a></h5>
                                <p>PHP Expert</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>40 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img ">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user10.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                                <p>Web Developer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>20 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img ">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user7.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Skyler Whites</a></h5>
                                <p>UI Designer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>30 Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="instructors-widget">
                            <div class="instructors-img">
                                <a href="instructor-list.html">
                                    <img class="img-fluid" alt="" src="assets/img/user/user8.jpg">
                                </a>
                            </div>
                            <div class="instructors-content text-center">
                                <h5><a href="instructor-profile.html">Patricia Mendoza</a></h5>
                                <p>Java Developer</p>
                                <div class="student-count d-flex justify-content-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>40 Students</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


<!-- <section class="section lead-companies">
    <div class="container">
        <div class="section-header aos" >
            <div class="section-sub-head feature-head text-center">
                <span>Trusted By</span>
                <h2>500+ Leading Universities And Companies</h2>
            </div>
        </div>
        <div class="lead-group aos" >
            <div class="lead-group-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="lead-img ms-2">
                        <img class="img-fluid" alt="" src="assets/img/lead-01.png">
                    </div>
                </div>
                <div class="item">
                    <div class="lead-img">
                        <img class="img-fluid" alt="" src="assets/img/lead-02.png">
                    </div>
                </div>
                <div class="item">
                    <div class="lead-img">
                        <img class="img-fluid" alt="" src="assets/img/lead-03.png">
                    </div>
                </div>
                <div class="item">
                    <div class="lead-img">
                        <img class="img-fluid" alt="" src="assets/img/lead-04.png">
                    </div>
                </div>
                <div class="item">
                    <div class="lead-img">
                        <img class="img-fluid" alt="" src="assets/img/lead-05.png">
                    </div>
                </div>
                <div class="item">
                    <div class="lead-img">
                        <img class="img-fluid" alt="" src="assets/img/lead-06.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<section class="section share-knowledge">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="knowledge-img aos">
                    <img src="assets/img/share.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="join-mentor aos">
                    <h2>Want to share your knowledge? Join us a Mentor</h2>
                    <p>High-definition video is video of higher resolution and quality than standard-definition. While
                        there is no standardized meaning for high-definition, generally any video.</p>
                    <ul class="course-list">
                        <li><i class="fa-solid fa-circle-check"></i>Best Courses</li>
                        <li><i class="fa-solid fa-circle-check"></i>Top rated Instructors</li>
                    </ul>
                    <div class="all-btn all-category d-flex align-items-center">
                        <a href="instructor-list.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section user-love">
    <div class="container">
        <div class="section-header white-header aos">
            <div class="section-sub-head feature-head text-center">
                <span>Check out these real reviews</span>
                <h2>Users-love-us Don't take it from us.</h2>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-four">
            <div class="review">
                <div class="container">
                    <div class="testi-quotes">
                        <img src="assets/img/qute.png" alt="">
                    </div>
                    <div class="mentor-testimonial lazy slider aos" data-aos="fade-up" data-sizes="50vw ">
                        <?php
                         if($testimonials){
                             foreach($testimonials as $testimonial){
                        ?>
                        <div class="d-flex justify-content-center">
                            <div class="testimonial-all d-flex justify-content-center">
                                <div class="testimonial-two-head text-center align-items-center d-flex">
                                    <div class="testimonial-four-saying ">
                                        <div class="testi-right">
                                            <img src="assets/img/qute-01.png" alt="">
                                        </div>
                                        <p><?= $testimonial['description'] ?>
                                        </p>
                                        <div class="four-testimonial-founder">
                                            <div class="fount-about-img">
                                                <a href="instructor-profile.html"><img src="<?= base_url($testimonial['img'])?>"
                                                        alt="" class="img-fluid"></a>
                                            </div>
                                            <h3><a href="instructor-profile.html"><?= $testimonial['name'] ?></a></h3>
                                            <span><?= $testimonial['type'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }}?>
                        <!-- <div class="d-flex justify-content-center">
                            <div class="testimonial-all d-flex justify-content-center">
                                <div class="testimonial-two-head text-center align-items-center d-flex">
                                    <div class="testimonial-four-saying ">
                                        <div class="testi-right">
                                            <img src="assets/img/qute-01.png" alt="">
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.
                                        </p>
                                        <div class="four-testimonial-founder">
                                            <div class="fount-about-img">
                                                <a href="instructor-profile.html"><img src="<?= base_url()?>assets/img/user/user3.jpg"
                                                        alt="" class="img-fluid"></a>
                                            </div>
                                            <h3><a href="instructor-profile.html">john smith</a></h3>
                                            <span>Founder of Awesomeux Technology</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="testimonial-all d-flex justify-content-center">
                                <div class="testimonial-two-head text-center align-items-center d-flex">
                                    <div class="testimonial-four-saying ">
                                        <div class="testi-right">
                                            <img src="assets/img/qute-01.png" alt="">
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.
                                        </p>
                                        <div class="four-testimonial-founder">
                                            <div class="fount-about-img">
                                                <a href="instructor-profile.html"><img src="<?= base_url()?>assets/img/user/user2.jpg"
                                                        alt="" class="img-fluid"></a>
                                            </div>
                                            <h3><a href="instructor-profile.html">David Lee</a></h3>
                                            <span>Founder of Awesomeux Technology</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>


<section class="section become-instructors aos">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex">
                <div class="student-mentor cube-instuctor ">
                    <h4>Become An Instructor</h4>
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="top-instructors">
                                <p>Top instructors from around the world teach millions of students on Mentoring.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="mentor-img">
                                <img class="img-fluid" alt="" src="assets/img/become-02.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex">
                <div class="student-mentor yellow-mentor">
                    <h4>Transform Access To Education</h4>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="top-instructors">
                                <p>Create an account to receive our newsletter, course recommendations and promotions.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="mentor-img">
                                <img class="img-fluid" alt="" src="assets/img/become-01.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        $(document).ready(function () {
            var base_url = '<?= base_url()?>'
            $('#StudentloginBtn').click(function () {
                let userName = $('#userEmailStudent').val();
                let password = $('#passwordStudent').val();

                $.ajax({
                    type: "POST",
                    url: base_url+'admin/Admin/student_login',
                    data: {
                        userName: userName,
                        password: password
                    },
                    success: function(response){
                        resp = JSON.parse(response)
                        if (resp.status) {
                            Toastify({
                                text: 'Login successful'.toUpperCase(),
                                duration: 3000, // Adjust as needed
                                position: "center",
                                close: true,
                                backgroundColor: resp.status ? "green" : "red" // Example: green for success, red for error
                            }).showToast();
                            setTimeout(function () {
                                location.href = '<?= base_url('home') ?>'
                            }, 1000)
                        }else{
                            Toastify({
                                text: 'User not found!'.toUpperCase(),
                                duration: 3000, // Adjust as needed
                                position: "center",
                                close: true,
                                backgroundColor: resp.status ? "green" : "red" // Example: green for success, red for error
                            }).showToast();
                            // alert('User not found!')
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
                
            })

            $('#CentreloginBtn').click(function () {
                let userName = $('#userEmailCentre').val();
                let password = $('#passwordCentre').val();
                alert("hello")
                $.ajax({
                    type: "POST",
                    url: base_url+'admin/Admin/centre_login',
                    data: {
                        userName: userName,
                        password: password
                    },
                    success: function(response){
                        resp = JSON.parse(response)
                        if (resp.status) {
                            Toastify({
                                text: 'Login successful'.toUpperCase(),
                                duration: 3000, // Adjust as needed
                                position: "center",
                                close: true,
                                backgroundColor: resp.status ? "green" : "red" // Example: green for success, red for error
                            }).showToast();
                            // alert('Login successful')
                            // $('#userEmailStudent').val("")
                            // $('#passwordStudent').val("")
                            setTimeout(function () {
                                location.href = '<?= base_url('home') ?>'
                            }, 1000)
                        }else{
                            Toastify({
                                text: 'User not found!'.toUpperCase(),
                                duration: 3000, // Adjust as needed
                                position: "center",
                                close: true,
                                backgroundColor: resp.status ? "green" : "red" // Example: green for success, red for error
                            }).showToast();
                        }
                    },
                    error: function(xhr, status, error){
                        console.error(xhr.responseText);
                    }
                });
                
            })

            function togglePassword() {
                var passwordField = document.getElementById("password");
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                } else {
                    passwordField.type = "password";
                }
            }

        });
    </script>