
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
                                        <th>WhatsApp</th>
                                        <th>Photo</th>
                                        <th>Last Qualification</th>
                                        <th>Parcentage(%)</th>
                                        <th>Date</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($students as $student){
                                        if($student['status'] == 'active'){
                                            $i=1;
                                            $dateTime = new DateTime($student['created_at']); 
                                            $dateOnly = $dateTime->format('d-m-Y');    
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $student['name']?></td>
                                        <td><?= $student['email']?></td>
                                        <td><?= $student['phone']?></td>
                                        <td><?= $student['whatsapp_no']?></td>
                                        <td><img src="<?= base_url($student['img'])?>" alt="" style="width: 70px;height: 70px;border-radius:50%"></td>
                                        <td><?= $student['last_qualification']?></td>
                                        <td><?= $student['marks_in_parcentage']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td>
                                            <select class="form-control update_status" onchange="update_status_Function_active('<?= $student['uid']?>')" name="update_status" id="update_status_active">
                                                <option value="<?= $student['status']?>" selected><?= $student['status']?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
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
                                        <th>WhatsApp</th>
                                        <th>Photo</th>
                                        <th>Last Qualification</th>
                                        <th>Parcentage(%)</th>
                                        <th>Date</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($students as $student){
                                        if($student['status'] == 'pending'){
                                        $i=1;
                                        $dateTime = new DateTime($student['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');    
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $student['name']?></td>
                                        <td><?= $student['email']?></td>
                                        <td><?= $student['phone']?></td>
                                        <td><?= $student['whatsapp_no']?></td>
                                        <td><img src="<?= base_url($student['img'])?>" alt="" style="width: 70px;height: 70px;border-radius:50%"></td>
                                        <td><?= $student['last_qualification']?></td>
                                        <td><?= $student['marks_in_parcentage']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td>
                                            <select class="form-control update_status" onchange="update_status_Function_pending('<?= $student['uid']?>')" name="update_status" id="update_status_pending">
                                                <option value="<?= $student['status']?>" selected><?= $student['status']?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
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
                                        <th>WhatsApp</th>
                                        <th>Photo</th>
                                        <th>Last Qualification</th>
                                        <th>Parcentage(%)</th>
                                        <th>Date</th>
                                        <th>status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($students as $student){
                                        if($student['status'] == 'inactive'){
                                        
                                        $dateTime = new DateTime($student['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');    
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $student['name']?></td>
                                        <td><?= $student['email']?></td>
                                        <td><?= $student['phone']?></td>
                                        <td><?= $student['whatsapp_no']?></td>
                                        <td><img src="<?= base_url($student['img'])?>" alt="" style="width: 70px;height: 70px;border-radius:50%"></td>
                                        <td><?= $student['last_qualification']?></td>
                                        <td><?= $student['marks_in_parcentage']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td>
                                            <select class="form-control update_status" onchange="update_status_Function_inactive('<?= $student['uid']?>')" name="update_status" id="update_status_inactive">
                                                <option value="<?= $student['status']?>" selected><?= $student['status']?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <?php } } ?>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
<script>
    var base_url = 'http://localhost/student_website/'
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
                        location.href = base_url+'admin/students'
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
                        location.href = base_url+'admin/students'
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
                        location.href = base_url+'admin/students'
                    }, 1000)
                }
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    }
</script>
                        