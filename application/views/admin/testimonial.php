
                    <div class="sell-course-head comman-space row">
                        <div class="col-sm-6">
                            <h2>Results</h2>
                        </div>
                        <div class="col-sm-6">
                            <ul class="nav header-navbar-rht" style="display: flex; justify-content:right;list-style-type: none;">
                                <li class="nav-item">
                                    <a class="nav-link header-sign" style="background-color:#b4a7f5;" href="<?= base_url('admin/testimonial-add')?>">+Create Result</a>
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
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php 
                                        if($testimonials != ""){
                                        $i=1; foreach($testimonials as $testimonial){  
                                        ?>
                                        <tr>
                                            <td><?= $i++?></td>
                                            <td><?= $testimonial['name']?></td>
                                            <td><?= $testimonial['type']?></td>
                                            <td><?= $testimonial['description']?></td>
                                            <td><img src="<?= base_url($testimonial['img'])?>" alt="" style="height:80px; weight:100px"></td>
                                            <!-- <td><a href="<?= base_url('admin/Pages/notice_update?id='.$notice['uid'])?>" class="btn btn-info text-light">View & Edit</a></td>
                                            <td><a href="<?= base_url('admin/Pages/delete_notice?id='.$notice['uid'])?>" class="btn btn-danger text-light">Delete</a></td> -->
                                        </tr>
                                        <?php }}?>
                                </tbody>
                            </table>
                        </div>

                        