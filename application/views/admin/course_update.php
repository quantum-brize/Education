<div class="sell-course-head comman-space">
    <h2>Add Course</h2>
</div>
<div class="comman-space pb-0">
    <div class="wpo-contact-form-area">
        <form class="card-body row" enctype="multipart/form-data" action="<?= base_url('admin/Pages/update_course?id='.$course['uid']) ?>" method="POST">
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Course Name</label>
                    <input type="text" class="form-control" name="course_name" value="<?= $course['course_name']?>" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Course Description</label>
                    <textarea rows="6" cols="30" class="form-control" required
                        name="course_description"><?= $course['course_description']?></textarea>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Course Duration</label>
                    <input type="text" class="form-control" name="course_duration" value="<?= $course['duration']?>" required>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class='form-group' id="aboutCourse">
                    <div>
                        <label for="formGroupExampleInput2">Course Image</label>
                    </div>
                    <img src="<?= base_url($course['image'])?>"
                        height="200" id="course_img" />
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" placeholder="course image"
                        name="course_img[]" />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit" />
                </div>
            </div>
        </form>
    </div>
</div>