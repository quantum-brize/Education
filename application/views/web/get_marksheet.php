<section class="section share-knowledge mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="knowledge-img aos" >
                </div>
            </div>
            <div class="col-md-7 d-flex ">
                <div class="join-mentor aos" >
                    <h2>Get Your Marksheet</h2>
                    <ul class="course-list">
                    </ul>
                    <div class="all-btn all-category d-flex align-items-center" id="get_element">
                        <a href="<?= base_url('marksheet') ?>" id="get_marksheet_button" class="btn btn-primary">Get Marksheet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        var base_url = '<?= base_url()?>'
            $.ajax({
                type: "GET",
                url: base_url+'web/Load/get_marksheet_details',
                success: function(response){
                    resp = JSON.parse(response)
                    if (resp.status) {
                        console.log(resp.data)
                        var count = (resp.data).length;
                        
                        // if(resp.data[0].grand_total < count*40){
                        //     $('#get_marksheet_button').hide();
                        //     html = '<h4 style="color:red">You are not eligable to get cirtificate!</h4>'
                        //     $('#get_element').html(html);
                        // }
                    }else{
                        $('#get_marksheet_button').hide();
                            html = '<h4 style="color:red">Marksheet not found!</h4>'
                            $('#get_element').html(html); 
                    }
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                }
            });

    });
</script>