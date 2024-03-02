<script>
// $(document).ready(function() {
//     $('#example').DataTable();
// });

$(document).on('change', 'input[name="profile_image[]"]', function (e) {
    console.log(1)
    var files = e.target.files;
    $('#aboutAvtar').html(''); // Clear existing previews

    for (var i = 0; i < files.length; i++) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#aboutAvtar').append(`<img src="${e.target.result}" height="100" id="profile_image"/>`);
        };
        reader.readAsDataURL(files[i]);
        }
    }); 
</script>