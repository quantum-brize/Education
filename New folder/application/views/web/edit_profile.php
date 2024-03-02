<

    <div class="main-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-md-4 theiaStickySidebar">
                        <div class="settings-widget dash-profile mb-3">
                            <div class="settings-menu p-0">
                                <div class="profile-bg">
                                    <h5>Beginner</h5>
                                    <img src="assets/img/profile-bg.jpg" alt="">
                                    <div class="profile-img">
                                        <a href="student-profile.html"><img src="<?= base_url($profile_data['img'])?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-group">
                                    <div class="profile-name text-center">
                                        <h4><a href="student-profile.html"><?= $profile_data['name']?></a></h4>
                                        <p><?= $profile_data['role']?></p>
                                    </div>
                                    <div class="go-dashboard text-center">
                                        <a href="<?= base_url('home')?>" class="btn btn-primary">Go to
                                            Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="settings-widget account-settings">
                            <div class="settings-menu">
                                <h3>ACCOUNT SETTINGS</h3>
                                <ul>
                                    <!-- <li class="nav-item">
                                        <a class="active" href="setting-edit-profile.html" class="nav-link">
                                            <i class="feather-settings"></i> Edit Profile
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="" href="<?= base_url('admin/student-logout')?>" class="nav-link">
                                            <i class="feather-power"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-9 col-md-8">
                        <div class="settings-widget profile-details">
                            <div class="settings-menu p-0">
                                <div class="profile-heading">
                                    <h3>Profile Details</h3>
                                    <p>You have full control to manage your own account setting.</p>
                                </div>
                                <form method="POST"  enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_user_profile_img?id='.$profile_data['uid']) ?>">
                                <div class="course-group mb-0 d-flex">
                                    
                                        <div class="course-group-img d-flex align-items-center">
                                        <div class='form-group' id="aboutAvtar">
                                            <!-- <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                                                height="200" id="course_img" /> -->
                                                <a href=""><img src="<?= base_url($profile_data['img'])?>" alt="" class="img-fluid" id="profile_image"></a>
                                        </div>
                                            
                                            <div class="course-name">
                                                <h4><a href="student-profile.html">Your avatar</a></h4>
                                                <!-- <p>PNG or JPG no bigger than 800px wide and tall.</p> -->
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file" placeholder="course image"
                                                        name="profile_image[]" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-share d-flex align-items-center justify-content-center">
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <!-- <a href="javascript:;" class="btn btn-danger">Delete</a> -->
                                        </div>
                                    
                                </div>
                                </form>
                                <div class="checkout-form personal-address add-course-info ">
                                    <div class="personal-info-head">
                                        <h4>Personal Details</h4>
                                        <p>Edit your personal information and address.</p>
                                    </div>
                                    <form method="POST"  enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_user?id='.$profile_data['uid']) ?>">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Name</label>
                                                    <input type="text" class="form-control"
                                                        name="name" value="<?= $profile_data['name']?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Email</label>
                                                    <input type="email" class="form-control"
                                                    name="email" value="<?= $profile_data['email']?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Phone</label>
                                                    <input type="text" class="form-control"
                                                    name="phone" value="<?= $profile_data['phone']?>" required>
                                                </div>
                                            </div>
                                            <div class="update-profile">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        