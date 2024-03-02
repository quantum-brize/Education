<section class="section share-knowledge mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="knowledge-img aos" >
                </div>
            </div>
            <div class="col-md-7 d-flex ">
                <div class="join-mentor aos" >
                    <h2>Get Your CirtiFicate</h2>
                    <ul class="course-list">
                    </ul>
                    <div class="all-btn all-category d-flex align-items-center" id="get_element">
                        <a href="<?= base_url('cirtificate') ?>" id="get_cirtificate_button" class="btn btn-primary">Get Cirtificate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var base_url = 'http://localhost/student_website/'
            $.ajax({
                type: "GET",
                url: base_url+'web/Load/get_cirtificate_details',
                success: function(response){
                    resp = JSON.parse(response)
                    if (resp.status) {
                        console.log(resp.data)
                        var count = (resp.data).length;
                        
                        if(resp.data[0].grand_total < count*40){
                            // alert(count)
                            $('#get_cirtificate_button').hide();
                            html = '<h4 style="color:red">You are not eligable to get cirtificate!</h4>'
                            $('#get_element').html(html);

                        }
                    }else{
                        $('#get_cirtificate_button').hide();
                            html = '<h4 style="color:red">Certificate not found!</h4>'
                            $('#get_element').html(html); 
                    }
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });

    });
</script>