<script>
  $(document).ready(function() {
      $("#downloadPDF").click(function () {
      // $("#content2").addClass('ml-215'); // JS solution for smaller screen but better to add media queries to tackle the issue
      getScreenshotOfElement(
        $("div#content2").get(0),
        // console.log($("div#content2").get(0))
        0,
        0,
        $("#content2").width() + 45,  // added 45 because the container's (content2) width is smaller than the image, if it's not added then the content from right side will get cut off
        $("#content2").height() + 30, // same issue as above. if the container width / height is changed (currently they are fixed) then these values might need to be changed as well.
        function (data) {
          console.log(data)
          var pdf = new jsPDF("p", "pt", [
              $("#content2").width(),
              $("#content2").height(),
          ]);
    
          pdf.addImage(
            "data:image/png;base64," + data,
            "PNG",
            0,
            0,
            $("#content2").width(),
            $("#content2").height(),
          );
          pdf.save("azimuth-certificte.pdf");
        }
      );
    });
  });

//   document.getElementById('downloadPDF').addEventListener('click', function() {
//   html2canvas(document.querySelector('.certificate')).then(function(canvas) {
//     var imgData = canvas.toDataURL('image/png');
//     var pdf = new jsPDF();
//     pdf.addImage(imgData, 'PNG', 0, 0, 210, 297); // A4 size: 210x297mm
//     pdf.save('certificate.pdf');
//   });
// });




  // $(document).ready(function() {
  //   var base_url = 'http://localhost/student_website/'
  //   $('#downloadPDF').click(function() {
  //     // var htmlContent = document.getElementById('content2').innerHTML; // Get the HTML content by ID
  //   $.ajax({
  //       url: base_url+'web/Load/download_pdf', // Replace with your controller's URL and function name
  //       type: 'GET',
  //       success: function(response) {
  //           console.log(response); // Handle the response from the controller if needed
  //       },
  //       error: function(xhr, status, error) {
  //           console.error(xhr.responseText); // Handle any errors
  //       }
  //   });
  //   });
  // });





  // this function is the configuration of the html2cavas library (https://html2canvas.hertzen.com/)
  // $("#content2").removeClass('ml-215'); is the only custom line here, the rest comes from the library.
  function getScreenshotOfElement(element, posX, posY, width, height, callback) {
    html2canvas(element, {
      onrendered: function (canvas) {
        // $("#content2").removeClass('ml-215');  // uncomment this if resorting to ml-125 to resolve the issue
        var context = canvas.getContext("2d");
        var imageData = context.getImageData(posX, posY, width, height).data;
        var outputCanvas = document.createElement("canvas");
        var outputContext = outputCanvas.getContext("2d");
        outputCanvas.width = width;
        outputCanvas.height = height;
  
        var idata = outputContext.createImageData(width, height);
        idata.data.set(imageData);
        outputContext.putImageData(idata, 0, 0);
        callback(outputCanvas.toDataURL().replace("data:image/png;base64,", ""));
      },
      width: width,
      height: height,
      useCORS: true,
      taintTest: false,
      allowTaint: false,
    });
  }
  
</script>