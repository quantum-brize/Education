
    <div class="settings-widget dash-profile">
        <div class="settings-menu p-0" style="margin-top: 100px">
            <div class="profile-bg">
                <img src="<img src="<?= base_url('assets/img/instructor-profile-bg.jpg')?>" alt="">
                <div class="profile-img">
                    <a href="instructor-profile.html"><img src="<?= base_url($students['img'])?>"
                        alt=""></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="instructor-profile.html"><?= $students['name']?></a></h4>
                </div>
               
                <div class="go-dashboard text-center">
                <form class="card-body" enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_status_centre_details?id='.$students['uid'])?>" method="POST">
                    <p>Status</p>
                    <select class="btn btn-primary" name="update_status">
                        <option value="<?= $students['status']?>" selected><?= $students['status']?></option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </form>
                </div>
                
            </div>
        </div>
    </div>
    <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;"><center>PERSONAL AND ACADEMIC DETAILS</center></h3>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Father's name: <?= $students['fathers_name']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Email: <?= $students['email']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Phone: <?= $students['phone']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
    <div class="col-sm-4">
            <p class="">Whatsapp No.: <?= $students['whatsapp_no']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Date of Birth: <?= $students['post_office']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Aadhar: <?= $students['aadhar']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Last Qualification: <?= $students['last_qualification']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Parcentage: <?= $students['marks_in_parcentage']?>(%)</p>
        </div>
        <div class="col-sm-4">
            <p class="">Marks: <?= $students['marks']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Examination Board: <?= $students['exam_board']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Registration Date: <?= $students['created_at']?></p>
        </div>
    </div>
    <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;"><center>RESIDENTIAL DETAILS</center></h3>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Villege/City: <?= $students['vill_city']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Post Office: <?= $students['post_office']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Police Station: <?= $students['police_station']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Block: <?= $students['block']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">District: <?= $students['district']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">State: <?= $students['state']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Contact: <?= $students['contact']?></p>
        </div>
    </div>
    <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;"><center>IMPORTANR DOCUMENTS</center></h3>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p>Student Photo:</p>
            <img src="<?= base_url($students['img'])?>" alt="">
        </div>
        <div class="col-sm-4">
            <p>Aadhar:</p>
            <img src="<?= base_url($students['aadhar_img'])?>" alt="">
        </div>
        <div class="col-sm-4">
            <p>Marksheet:</p>
            <img src="<?= base_url($students['marksheet_img'])?>" alt="">
        </div>
    </div>
