<div class="sell-course-head comman-space">
    <h2>Add Notice</h2>
</div>
<div class="comman-space pb-0">
    <div class="wpo-contact-form-area">
        <form class="card-body row" enctype="multipart/form-data" action="<?= base_url('admin/Pages/add_new_notice') ?>" method="POST">
            <div class="col-xl-12 col-lg-12">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Notice Title</label>
                    <input type="text" class="form-control" name="notice_title" placeholder="Notice Title" required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Notice Description</label>
                    <textarea rows="6" cols="30" class="form-control" placeholder="Write notice description..." required
                        name="notice_description"></textarea>
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