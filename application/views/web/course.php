<section class="section share-knowledge mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="knowledge-img aos" >
                    <img src="<?= base_url($course['image'])?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="join-mentor aos" >
                    <h2><?= $course['course_name']?></h2>
                    <p><?= $course['course_description']?></p>
                    <ul class="course-list">
                        <li id="hello"><i class="fa-solid fa-circle-check"></i>Best Course</li>
                        <li><i class="fa-solid fa-circle-check"></i>Top rated Instructors</li>
                    </ul>
                    <div class="all-btn all-category d-flex align-items-center">
                        <button onclick="enrole_this_course('<?php echo $course['uid']; ?>')" class="btn btn-primary">Enrole Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        var base_url = '<?= base_url()?>'
        function enrole_this_course(course_id) {
            $.ajax({
                type: "POST",
                url: base_url+'admin/Pages/enrole_for_course',
                data: {
                    id: course_id,
                },
                success: function(response){
                    console.log(response)
                   var resp = JSON.parse(response)
                    console.log(resp)

                   
                    if (resp.status ) {
                        Toastify({
                            text: resp.msg.toUpperCase(),
                            duration: 3000, // Adjust as needed
                            position: "center",
                            close: true,
                            backgroundColor: resp.status ? "green" : "red" // Example: green for success, red for error
                        }).showToast();
                    }else{
                        Toastify({
                                text: resp.msg.toUpperCase(),
                                duration: 3000, // Adjust as needed
                                position: "center",
                                close: true,
                                backgroundColor: resp.status ? "green" : "red" // Example: green for success, red for error
                            }).showToast();
                    }
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });
            
        }

    // });
</script>