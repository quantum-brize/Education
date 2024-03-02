
                    <div class="sell-course-head comman-space row">
                        <div class="col-sm-6">
                            <h2>Results</h2>
                        </div>
                        <div class="col-sm-6">
                            <ul class="nav header-navbar-rht" style="display: flex; justify-content:right;list-style-type: none;">
                                <li class="nav-item">
                                    <a class="nav-link header-sign" style="background-color:#b4a7f5;" href="<?= base_url('admin/creat-result')?>">+Create Result</a>
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
                                        <th>Course</th>
                                        <th>Subject</th>
                                        <th>Theory Marks</th>
                                        <th>Practical Marks</th>
                                        <th>Total</th>
                                        <th>Grand Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $i=1; foreach($results as $result){  
                                        ?>
                                        <tr>
                                            <td><?= $i++?></td>
                                            <td><?= $result['name']?></td>
                                            <td><?= $result['course_name']?></td>
                                            <td><?= $result['subject']?></td>
                                            <td><?= $result['th_marks']?></td>
                                            <td><?= $result['practical_marks']?></td>
                                            <td><?= $result['total']?></td>
                                            <td><?= $result['grand_total']?></td>
                                            <!-- <td><a href="<?= base_url('admin/Pages/notice_update?id='.$notice['uid'])?>" class="btn btn-info text-light">View & Edit</a></td>
                                            <td><a href="<?= base_url('admin/Pages/delete_notice?id='.$notice['uid'])?>" class="btn btn-danger text-light">Delete</a></td> -->
                                        </tr>
                                        <?php }?>
                                </tbody>
                            </table>
                        </div>

                        