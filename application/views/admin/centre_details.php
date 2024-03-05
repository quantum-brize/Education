
    <div class="settings-widget dash-profile">
        <div class="settings-menu p-0" style="margin-top: 100px">
            <div class="profile-bg">
            <h5>Beginner</h5>
                <img src="<img src="<?= base_url('assets/img/instructor-profile-bg.jpg')?>" alt="">
                <div class="profile-img">
                    <a href="instructor-profile.html"><img src="<?= base_url($centres['logo_img'])?>"
                        alt=""></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="instructor-profile.html"><?= $centres['centre_name']?></a></h4>
                </div>
               
                <div class="go-dashboard text-center">
                <form class="card-body" enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_status_centre_details?id='.$centres['uid'])?>" method="POST">
                    <p>Status</p>
                    <select class="btn btn-primary" name="update_status">
                        <option value="<?= $centres['status']?>" selected><?= $centres['status']?></option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </form>
                </div>
                
            </div>
        </div>
    </div>
    <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;"><center>CENTRE DETAILS</center></h3>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Franchise Type: <?= $centres['franchise_type']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Franchise Type: <?php echo isset($centres['referral_id']) ? $centres['referral_id'] : "";?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Place: <?= $centres['centre_place']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Post Office: <?= $centres['post_office']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Police Station: <?= $centres['police_station']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Block: <?= $centres['block']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">District: <?= $centres['district']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">State: <?= $centres['state']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Pin Code: <?= $centres['pincode']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Contact: <?= $centres['contact']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Total Area: <?= $centres['total_area']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Total Computers: <?= $centres['total_computers']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Total Staff: <?= $centres['total_staff']?></p>
        </div>
    </div>
    <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;"><center>PERSONAL INFORMATION AND RESIDENTIAL DETAILS</center></h3>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Name: <?= $centres['name']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Email: <?= $centres['email']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Phone: <?= $centres['phone']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Date od Birth: <?= $centres['dob']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Registration Date: <?= $centres['created_at']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Villege/City: <?= $centres['vill_city']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Post Office: <?= $centres['residential_post_office']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">Police Station: <?= $centres['residential_police_station']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Block: <?= $centres['residential_block']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">District: <?= $centres['residential_district']?></p>
        </div>
        <div class="col-sm-4">
            <p class="">State: <?= $centres['residential_state']?></p>
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p class="">Contact: <?= $centres['residential_contact']?></p>
        </div>
    </div>
    <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;"><center>IMPORTANR DOCUMENTS</center></h3>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p>Franchise Logo:</p>
            <img src="<?= base_url($centres['logo_img'])?>" alt="">
        </div>
        <div class="col-sm-4">
            <p>Director Photo:</p>
            <img src="<?= base_url($centres['img'])?>" alt="">
        </div>
        <div class="col-sm-4">
            <p>Signature:</p>
            <img src="<?= base_url($centres['signature_img'])?>" alt="">
        </div>
    </div>
    <div class="row" style="padding-left: 20px">
        <div class="col-sm-4">
            <p>Franchise Logo:</p>
            <img src="<?= base_url($centres['aadhar_img'])?>" alt="">
        </div>
        <div class="col-sm-4">
            <p>Director Photo:</p>
            <img src="<?= base_url($centres['last_qualification_img'])?>" alt="">
        </div>
    </div>
<!-- <script>
    var base_url = '<?= base_url()?>'
    function update_status_Function_active(user_id) {
        var status = document.getElementById("update_status").value;
        $.ajax({
            type: "POST",
            url: base_url+'admin/Pages/update_centre_status',
            data: {
                user_id: user_id,
                status: status
            },
            success: function(response){
                resp = JSON.parse(response)
                    if(resp.success){
                        setTimeout(function () {
                        location.href = base_url+'admin/centres'
                    }, 1000)
                }
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    }
</script> -->