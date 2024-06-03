<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience Certificate Generator</title>
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles_cirtificate_centre.css">
</head>
<body>

    <div class="toolbar no-print">
        <button class="btn btn-info" onclick="window.print()">
            Print Certificate
        </button>
        <button class="btn btn-info"  id="downloadPDF">Download PDF</button>
    </div>
    <div class="cert-container print-m-0">
      <div id="content2" class="cert certificate">
        <img src="<?= base_url('uploads/franchise_certificate.png')?>" class="cert-bg" alt="" />
        <div class="cert-content" style="margin-top:300px;">
            <span style="font-size: 20px; font-weight: bold">This Cirtificate Is Proudly Presented To</span><br><br>
            <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -100px"><span style="font-size: 20px; font-weight: bold;"><?= $centre['centre_name']?></span></span>
            <br><br>
            <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -250px">Director's Name:&nbsp&nbsp&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $centre['name']?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span> <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -250px">Centre Code:&nbsp&nbsp&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;">1234ABCD</span></span></span>
            <!-- <br><br>
            <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -250px">Centre Code:&nbsp&nbsp&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;">1234ABCD</span></span> -->
            <br><br>
            <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -250px">Issue Date:&nbsp&nbsp&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;">15-01-2002</span></span>
            <br><br>
            <span
                style="font-size: 15px; position: absolute; margin-left: -280px">_____________________________________________________________________</span>
            <br><br><br><br>
            <span
                style="font-size: 15px; font-weight: bold; position: absolute;"><span style="position: absolute; margin-left: -300px"> Signature of Authorised Signatory:</span><span style=" margin-left: 80px"> Signature of Authorised Signatory:</span></span>
            <br><br>
            <!-- <span style="font-size: 17px; font-weight: bold">You may also visit to verify your result
                https://www.zcceducation.com/</span><br><br> -->


          <br /><br /><br /><br />
          <small  style="font-weight: bold;">Address: <?= $centre['centre_place']?>, <?= $centre['district']?>, <?= $centre['state']?>, -<?= $centre['pincode']?></small><br /><br />
          <small
            >Completion of the Azimuth Check and review of the Azimuth Check
            recommendations in ArmyFit is worth 1.0 hours in the Electronic
            Based Distance Learning (EBDL) program for USAR and ARNG Soldiers.
            For more information on the EBDL, see your unit training NCO.</small
          >
          <div class="bottom-txt">
            <span>G-1 DAPE-ARR-SF</span>
            <span>Completed on: April 3, 2020</span>
          </div>
        </div>
      </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience Certificate Generator</title>
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles_cirtificate.css">
</head>
<body>
    <div class="toolbar no-print">
      <button class="btn btn-info" onclick="window.print()">
        Print Certificate
      </button>
      <button class="btn btn-info" id="downloadPDF">Download PDF</button>
    </div>
    <div class="cert-container print-m-0">
      <div id="content2" class="cert">
        <img
          src="https://edgarsrepo.github.io/certificate.png"
          class="cert-bg"
          alt=""
        />
        <div class="cert-content">
          <h1 class="other-font">Certificate of Completion</h1>
          <span style="font-size: 30px;">Reginald Bentley</span>
          <br /><br /><br /><br />
          <span class="other-font"
            ><i><b>has completed the</b></i></span
          >
          <br />
          <span style="font-size: 40px;"><b>Azimuth Check</b></span>
          <br />
          <small>(For Soldiers)</small>
          <br /><br /><br /><br />
          <small
            >Completion of the Azimuth Check and review of the Azimuth Check
            recommendations in ArmyFit is worth 1.0 hours in the Electronic
            Based Distance Learning (EBDL) program for USAR and ARNG Soldiers.
            For more information on the EBDL, see your unit training NCO.</small
          >
          <div class="bottom-txt">
            <span>G-1 DAPE-ARR-SF</span>
            <span>Completed on: April 3, 2020</span>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
</body>
</html> -->
