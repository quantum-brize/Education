<div class="sell-course-head comman-space">
    <h2>Creat Result</h2>
</div>
<div class="comman-space pb-0">
    <div class="wpo-contact-form-area">
        <form class="card-body" enctype="multipart/form-data" action="<?= base_url('admin/Pages/creat_new_numbers') ?>" method="POST">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Select Student</label>
                    <select class="form-control" name="student_id[]" id="" required>
                        <option >select</option>
                        <?php
                            if(!empty($students)){
                                foreach($students as $student){
                        ?>
                        <option value="<?= $student['uid']?>"><?= $student['name']?></option>
                        <?php }}?>
                    </select>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Select Course</label>
                    <select class="form-control" name="course_id[]" id="" required>
                        <option >select</option>
                        <?php
                            if(!empty($courses)){
                                foreach($courses as $course){
                        ?>
                        <option value="<?= $course['uid']?>"><?= $course['course_name']?></option>
                        <?php }}?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">From</label>
                    <input type="date" class="form-control" name="from[]" placeholder="Enter subject name" required>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">To</label>
                    <input type="date" class="form-control" name="to[]" placeholder="Enter subject name" required>
                </div>
            </div>
        </div>
            <button type="button" onclick="add()" class="btn btn-primary">Add</button>
            <button type="button" onclick="remove()" class="btn btn-primary">Remove</button>

        <div id="new_chq">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Subject</label>
                        <input type="text" class="form-control" name="subject[]" placeholder="Enter subject name" required>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">TH. Marks</label>
                        <input type="text" class="form-control" name="theory_marks[]" required>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Practical Marks</label>
                        <input type="text" class="form-control" name="practical_marks[]" required>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Total</label>
                        <input type="text" class="form-control" name="total[]" required>
                    </div>
                </div>
            </div>
        </div>    
            <input type="hidden" value="1" id="total_chq">

            <div class="col-xl-6 col-lg-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit" />
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
    //   var new_input="<input type='text' id='new_"+new_chq_no+"'>";
      var new_input=`
            <div class="row" id='new_${new_chq_no}'>
                <div class="col-xl-6 col-lg-6">
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Subject</label>
                        <input type="text" class="form-control" name="subject[]" placeholder="Enter subject name" required>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="form-group" id='new_"+new_chq_no+"'>
                        <label for="formGroupExampleInput">TH. Marks</label>
                        <input type="number" class="form-control" name="theory_marks[]" required>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Practical Marks</label>
                        <input type="number" class="form-control" name="practical_marks[]" required>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Total</label>
                        <input type="number" class="form-control" name="total[]" required>
                    </div>
                </div>
            </div>      
      `;
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
    function remove(){
      var last_chq_no = $('#total_chq').val();
      if(last_chq_no>1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);
      }
    }
</script>
