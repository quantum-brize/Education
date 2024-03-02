
                    <div class="sell-course-head comman-space row">
                        <div class="col-sm-6">
                            <h2>Courses</h2>
                        </div>
                        <div class="col-sm-6">
                            <ul class="nav header-navbar-rht" style="display: flex; justify-content:right;list-style-type: none;">
                                <li class="nav-item">
                                    <a class="nav-link header-sign" style="background-color:#b4a7f5;" href="<?= base_url('admin/add-notice')?>">+Add Notice</a>
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
                                        <th>Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($notices as $notice){
                                        $dateTime = new DateTime($notice['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');     
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $notice['title']?></td>
                                        <td><?= $notice['description']?></td>
                                        <td><?= $dateOnly?></td>
                                        <td><a href="<?= base_url('admin/Pages/notice_update?id='.$notice['uid'])?>" class="btn btn-info text-light">View & Edit</a></td>
                                        <td><a href="<?= base_url('admin/Pages/delete_notice?id='.$notice['uid'])?>" class="btn btn-danger text-light">Delete</a></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                        