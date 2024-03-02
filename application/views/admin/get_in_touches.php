
                    <div class="sell-course-head comman-space row">
                        <div class="col-sm-6">
                            <h2>Get In Touches</h2>
                        </div>
                    </div>
                    <div class="comman-space pb-0">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($get_in_touchs as $get_in_touch){
                                        $dateTime = new DateTime($get_in_touch['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');     
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $get_in_touch['name']?></td>
                                        <td><?= $get_in_touch['email']?></td>
                                        <td><?= $get_in_touch['phone']?></td>
                                        <td><?= $get_in_touch['address']?></td>
                                        <td><?= $get_in_touch['message']?></td>
                                        <td><?= $dateOnly?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                        