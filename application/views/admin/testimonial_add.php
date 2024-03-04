<div class="sell-course-head comman-space">
    <h2>Add Course</h2>
</div>
<div class="comman-space pb-0">
    <div class="wpo-contact-form-area">
        <form class="card-body row" enctype="multipart/form-data" action="<?= base_url('admin/Pages/add_new_testimonial') ?>" method="POST">
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="founder">Founder</option>
                        <option value="cofounder">Co-Founder</option>
                        <option value="ceo">Ceo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Description</label>
                    <textarea rows="6" cols="30" class="form-control" placeholder="description..." required
                        name="description"></textarea>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class='form-group' id="aboutTestimonial">
                    <div>
                        <label for="formGroupExampleInput2">Testimonial Image</label>
                    </div>
                    <img src="https://usercontent.one/wp/www.vocaleurope.eu/wp-content/uploads/no-image.jpg?media=1642546813"
                        height="200" id="testimonial_img" />
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" placeholder="course image"
                        name="testimonial_img[]" required />
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