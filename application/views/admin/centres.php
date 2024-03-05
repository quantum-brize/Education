
                    <div class="sell-course-head comman-space">
                    <h2>Centres</h2>
                    </div>
                    <div class="comman-space pb-0">
                        <div class="tab">
                            <button class="tablinks active" onclick="openCity(event, 'London')">Active</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Pending</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Inactive</button>
                        </div>

                        <div id="London" class="tabcontent">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Photo</th>
                                        <th>Franchise Type</th>
                                        <th>Centre Name</th>
                                        <th>Date</th>
                                        <th>status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($centres as $centre){
                                        if($centre['status'] == 'active'){
                                            $i=1;
                                            $dateTime = new DateTime($centre['created_at']); 
                                            $dateOnly = $dateTime->format('d-m-Y');
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $centre['name']?></td>
                                        <td><?= $centre['email']?></td>
                                        <td><?= $centre['phone']?></td>
                                        <td><img src="<?= base_url($centre['img'])?>" alt="" style="width: 70px;height: 70px;border-radius:50%"></td>
                                        <td><?= $centre['franchise_type']?></td>
                                        <td><?= $centre['centre_name']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td>
                                            <select class="form-control update_status" onchange="update_status_Function_active('<?= $centre['uid']?>')" name="update_status" id="update_status_active">
                                                <option value="<?= $centre['status']?>" selected><?= $centre['status']?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
                                        <td><a href="<?= base_url('admin/Pages/centre_details?id='.$centre['uid'])?>" class="btn btn-success" role="button">view</a></td>
                                    </tr>
                                    <?php } } ?>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <table id="example1" class="table table-striped">
                                <thead>
                                     <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Photo</th>
                                        <th>Franchise Type</th>
                                        <th>Centre Name</th>
                                        <th>Date</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($centres as $centre){
                                        if($centre['status'] == 'pending'){
                                        $i=1;
                                        $dateTime = new DateTime($centre['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');    
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $centre['name']?></td>
                                        <td><?= $centre['email']?></td>
                                        <td><?= $centre['phone']?></td>
                                        <td><img src="<?= base_url($centre['img'])?>" alt="" style="width: 70px;height: 70px;border-radius:50%"></td>
                                        <td><?= $centre['franchise_type']?></td>
                                        <td><?= $centre['centre_name']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td>
                                            <select class="form-control update_status" onchange="update_status_Function_pending('<?= $centre['uid']?>')" name="update_status" id="update_status_pending">
                                                <option value="<?= $centre['status']?>" selected><?= $centre['status']?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
                                        <td><a href="<?= base_url('admin/Pages/centre_details?id='.$centre['uid'])?>" class="btn btn-success" role="button">view</a></td>
                                    </tr>
                                    <?php } } ?>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <table id="example2" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Photo</th>
                                        <th>Franchise Type</th>
                                        <th>Centre Name</th>
                                        <th>Date</th>
                                        <th>status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($centres as $centre){
                                        if($centre['status'] == 'inactive'){
                                        $i=1;
                                        $dateTime = new DateTime($centre['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');    
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $centre['name']?></td>
                                        <td><?= $centre['email']?></td>
                                        <td><?= $centre['phone']?></td>
                                        <td><img src="<?= base_url($centre['img'])?>" alt="" style="width: 70px;height: 70px;border-radius:50%"></td>
                                        <td><?= $centre['franchise_type']?></td>
                                        <td><?= $centre['centre_name']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td>
                                            <select class="form-control update_status" onchange="update_status_Function_inactive('<?= $centre['uid']?>')" name="update_status" id="update_status_inactive">
                                                <option value="<?= $centre['status']?>" selected><?= $centre['status']?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
                                        <td><a href="<?= base_url('admin/Pages/centre_details?id='.$centre['uid'])?>" class="btn btn-success" role="button">view</a></td>
                                    </tr>
                                    <?php } } ?>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
<script>
    var base_url = '<?= base_url()?>'
    function update_status_Function_active(user_id) {
        var status = document.getElementById("update_status_active").value;
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
    function update_status_Function_pending(user_id) {
        var status = document.getElementById("update_status_pending").value;
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
    function update_status_Function_inactive(user_id) {
        var status = document.getElementById("update_status_inactive").value;
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
</script>
                        