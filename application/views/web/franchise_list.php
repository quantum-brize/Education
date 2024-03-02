
<div class="page-content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="showing-list">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <div class="view-icons">
                                            <a href="instructor-grid.html" class="grid-view "><i
                                                    class="feather-grid"></i></a>
                                            <a href="instructor-list.html" class="list-view active"><i
                                                    class="feather-list"></i></a>
                                        </div>
                                        <div class="show-result">
                                            <h4>Showing 1-9 of 50 results</h4>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-6">
                                    <div class="show-filter add-course-info">
                                        <form action="#">
                                            <div class="row gx-2 align-items-center">
                                                <div class="col-md-6 col-item">
                                                    <div class=" search-group">
                                                        <i class="feather-search"></i>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search our courses">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-item">
                                                    <div class="form-group select-form mb-0">
                                                        <div wire:snapshot="{&quot;data&quot;:[],&quot;memo&quot;:{&quot;id&quot;:&quot;sk0YI0gaCBEOSeqatCw7&quot;,&quot;name&quot;:&quot;select2-component-filter&quot;,&quot;path&quot;:&quot;instructor-list&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;2e5d28e13d537f780a55259e30c7c1a414fc9fa1bda8b9152984d14803d3884c&quot;}"
                                                            wire:effects="[]" wire:id="sk0YI0gaCBEOSeqatCw7">
                                                            <select wire:model="selectedOption" id="select2"
                                                                class="form-select select">
                                                                <option value="Newly published">Newly published</option>
                                                                <option value="Angular">Angular</option>
                                                                <option value="Nodejs">Nodejs</option>
                                                                <option value="React">React</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                        <div class="row">
                            <?php 
                                if($centres){
                                    foreach($centres as $centre){
                            ?>
                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="<?= base_url($centre['img'])?>">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html"><?= $centre['name']?></a></h5>
                                        <h6><?= $centre['centre_name']?></h6>
                                        <!-- <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center ms-0">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div> -->
                                        <div class="instructor-badge">
                                            <span class="web-badge">Contact:<?= $centre['contact']?></span>
                                            <span class="web-badge">Email: <?= $centre['email']?></span>
                                            <!-- <span class="web-badge">UI Design</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }}?>
<!-- 
                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="assets/img/user/user.jpg">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html">Jenis R.</a></h5>
                                        <h6>Instructor</h6>
                                        <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating"><span>5.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="instructor-badge">
                                            <span class="web-badge">Web Design</span>
                                            <span class="web-badge">web development</span>
                                            <span class="web-badge">UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="assets/img/user/user4.jpg">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html">Jesse Stevens</a></h5>
                                        <h6>Instructor</h6>
                                        <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="instructor-badge">
                                            <span class="web-badge">Web Design</span>
                                            <span class="web-badge">web development</span>
                                            <span class="web-badge">UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="assets/img/user/user2.jpg">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html">Stevens Jes</a></h5>
                                        <h6>Instructor</h6>
                                        <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating"><span>5.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="instructor-badge">
                                            <span class="web-badge">Web Design</span>
                                            <span class="web-badge">web development</span>
                                            <span class="web-badge">UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="assets/img/user/user3.jpg">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html">John Smith</a></h5>
                                        <h6>Instructor</h6>
                                        <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="instructor-badge">
                                            <span class="web-badge">Web Design</span>
                                            <span class="web-badge">web development</span>
                                            <span class="web-badge">UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="assets/img/user/user5.jpg">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html">Stella Johnson</a></h5>
                                        <h6>Instructor</h6>
                                        <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="instructor-badge">
                                            <span class="web-badge">Web Design</span>
                                            <span class="web-badge">web development</span>
                                            <span class="web-badge">UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 d-flex">
                                <div class="instructor-list flex-fill">
                                    <div class="instructor-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="assets/img/user/user12.jpg">
                                        </a>
                                    </div>
                                    <div class="instructor-content">
                                        <h5><a href="instructor-profile.html">John Michael</a></h5>
                                        <h6>Instructor</h6>
                                        <div class="instructor-info">
                                            <div class="rating-img d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-01.svg" class="me-1" alt="">
                                                <p>12+ Lesson</p>
                                            </div>
                                            <div class="course-view d-flex align-items-center justify-content-center">
                                                <img src="assets/img/icon/icon-02.svg" class="me-1" alt="">
                                                <p>9hr 30min</p>
                                            </div>
                                            <div class="rating-img d-flex align-items-center">
                                                <img src="assets/img/icon/user-icon.svg" class="me-1" alt="">
                                                <p>50 Students</p>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <span class="d-inline-block average-rating"><span>5.0</span> (15)</span>
                                            </div>
                                            <div class="course-share rating-count">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="instructor-badge">
                                            <span class="web-badge">Web Design</span>
                                            <span class="web-badge">web development</span>
                                            <span class="web-badge">UI Design</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pagination lms-page lms-pagination">
                                    <ul class="pagination lms-page mt-0">
                                        <li class="page-item prev">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-angle-left"></i></a>
                                        </li>
                                        <li class="page-item first-page active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">5</a>
                                        </li>
                                        <li class="page-item next">
                                            <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </ul>
                            </div>
                        </div> -->

                    </div>
                    <!-- <div class="col-lg-3">
                        <div class="filter-clear">
                            <div class="clear-filter d-flex align-items-center">
                                <h4><i class="feather-filter"></i>Filters</h4>
                                <div class="clear-text">
                                    <p>CLEAR</p>
                                </div>
                            </div>

                            <div class="card search-filter">
                                <div class="card-body">
                                    <div class="filter-widget mb-0">
                                        <div class="categories-head d-flex align-items-center">
                                            <h4>Course categories</h4>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Backend (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> CSS (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Frontend (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist" checked="">
                                                <span class="checkmark"></span> General (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist" checked="">
                                                <span class="checkmark"></span> IT & Software (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Photography (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Programming Language (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check mb-0">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Technology (2)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card search-filter">
                                <div class="card-body">
                                    <div class="filter-widget mb-0">
                                        <div class="categories-head d-flex align-items-center">
                                            <h4>Instructors</h4>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Keny White (10)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Hinata Hyuga (5)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> John Doe (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check mb-0">
                                                <input type="checkbox" name="select_specialist" checked="">
                                                <span class="checkmark"></span> Nicole Brown
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card search-filter ">
                                <div class="card-body">
                                    <div class="filter-widget mb-0">
                                        <div class="categories-head d-flex align-items-center">
                                            <h4>Price</h4>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div>
                                            <label class="custom_check custom_one">
                                                <input type="radio" name="select_specialist">
                                                <span class="checkmark"></span> All (18)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check custom_one">
                                                <input type="radio" name="select_specialist">
                                                <span class="checkmark"></span> Free (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check custom_one mb-0">
                                                <input type="radio" name="select_specialist" checked="">
                                                <span class="checkmark"></span> Paid (15)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> -->
                </div>
            </div>
        </div>