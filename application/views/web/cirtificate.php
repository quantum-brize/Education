<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience Certificate Generator</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles_cirtificate.css">
</head>
<style>
    /* Basic button style */
a.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f4b71a; /* Green background color */
    color: white; /* White text color */
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Hover effect */
a.button:hover {
    background-color: #45a049; /* Darker green */
}
</style>
<body>
    <div class="toolbar no-print">
        <button class="btn btn-info" onclick="window.print()">
            Print Certificate
        </button>
        <!-- <button class="btn btn-info" onclick="generatePDF()" id="downloadPDF">Download PDF</button> -->
        <button class="btn btn-info"  id="downloadPDF">Download PDF</button>
        <!-- <button class="btn btn-info" onclick="generatePDF()" id="downloadPDF">Download PDF</button> -->
       <!-- <a href="<?= base_url('web/Load/download_pdf')?>" class="button">Download PDF</a> -->
    </div>
    <div class="cert-container print-m-0">
      <div id="content2" class="cert certificate">
        <img src="<?= base_url('uploads/student_certificate_new.png')?>" class="cert-bg" alt="" />
        <div class="cert-content" style="margin-top:120px;">
            <img src="<?= base_url($student[0]['img'])?>" alt="" style="height:100px; width:90px; position: absolute; right: 90px; margin-top: 40px; border: 1px solid" >
            
            <span><p style="font-size: 15px; font-weight: bold;position: absolute; ">Regd No.</p>
            <p style="font-size: 15px; font-weight: bold;position: absolute; margin-left: 350px;">SL. No.</p></span>
            
            <br><br><br>
            <div style="margin-bottom: 1px;">This certificate that <?= $student[0]['name']?> has successfully completed the </div>
            <div style="margin-bottom: 1px;"><?= $student[0]['course_name']?> at Shivam Maharaj Youth Computer Academy. This course,</div>
            <div style="margin-bottom: 1px;"> conducted from <?= $student[0]['start_date']?> to <?= $student[0]['end_date']?>, consisted of <?= $student[0]['duration']?> of</div>
            <div style="margin-bottom: 1px;">comprehensive training in <?= $student[0]['subject']?>. Issued on this <?= date('d-m-Y');?> by</div>
            <div style="margin-bottom: 1px;">[Authorised signature/Stamp].</div>
            <br><br>
            <span>Congratulation on your achivement.</span>
            <br><br>

          <br />
        </div>
      </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</body>
</html>