<script>
$(document).ready(function() {
    $('#example').DataTable();
});

$(document).on('change', 'input[name="course_img[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutCourse').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutCourse').append(`<img src="${e.target.result}" height="100" id="course_img"/>`);
        };

        reader.readAsDataURL(files[i]);
        }
    }); 
</script>