
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
                                        <th>Course</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if($enroled_courses){
                                    $i=1; foreach($enroled_courses as $ec){
                                        $dateTime = new DateTime($ec['created_at']); 
                                        $dateOnly = $dateTime->format('d-m-Y');     
                                    ?>
                                    <tr>
                                        <td><?= $i++?></td>
                                        <td><?= $ec['name']?></td>
                                        <td><?= $ec['course_name']?></td>
                                        <td><?= $ec['phone']?></td>
                                        <td><?= $ec['email']?></td>
                                        <td><?= $dateOnly?></td>
                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>

                        