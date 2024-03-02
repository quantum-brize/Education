
                    <div class="sell-course-head comman-space row">
                        <div class="col-sm-6">
                            <h2>Courses</h2>
                        </div>
                        <div class="col-sm-6">
                            <ul class="nav header-navbar-rht" style="display: flex; justify-content:right;list-style-type: none;">
                                <li class="nav-item">
                                    <a class="nav-link header-sign" style="background-color:#b4a7f5;" href="<?= base_url('admin/add-cources')?>">+Add Cource</a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                    <div class="comman-space pb-0">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Duration</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($courses as $course){
                                        $dateTime = new DateTime($course['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');     
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $course['course_name']?></td>
                                        <td><?= $course['course_description']?></td>
                                        <td><?= $course['duration']?></td>
                                        <td><img src="<?= base_url($course['image'])?>" alt="" style="width: 100px;height: 80px;"></td>
                                        <td><?= $dateOnly?></td>
                                        <td><a href="<?= base_url('admin/Pages/course_update?id='.$course['uid'])?>" class="btn btn-info text-light">View & Edit</a></td>
                                        <td><a href="<?= base_url('admin/Pages/delete_course?id='.$course['uid'])?>" class="btn btn-danger text-light">Delete</a></td>
                                    </tr>
                                    <?php }?>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        