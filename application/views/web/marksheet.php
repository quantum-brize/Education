<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience Certificate Generator</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/styles_cirtificate.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
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
        <img src="<?= base_url('uploads/student_marksheet_new.png')?>" class="cert-bg" alt="" />
        <div class="cert-content" style="margin-top:100px;">
            <!-- <img src="<?= base_url($student[0]['img'])?>" alt="" style="height:100px; width:90px; position: absolute; right: 90px; margin-top: 0px; border: 1px solid" > -->
            <div class="row">
                <div class="col-lg-6">
                    <span
                    style="font-size: 13px; font-weight: bold; position: absolute; margin-left: 0px">Student Name:&nbsp&nbsp <?= $student[0]['name']?>
                    </span><br>
                    <span
                        style="font-size: 13px; font-weight: bold; position: absolute; margin-left: 0px">Roll No:&nbsp&nbsp [Roll No]
                    </span><br>
                    <span
                        style="font-size: 13px; font-weight: bold; position: absolute; margin-left: 0px">Course Name:&nbsp&nbsp <?= $student[0]['course_name']?>
                    </span>
                </div>
                <div class="col-lg-6">
                    <span
                        style="font-size: 13px; font-weight: bold; position: absolute; margin-left: 0px">Centre Name:&nbsp&nbsp Shivaji Mahraj Youth Computer Academy
                    </span>
                    <br>
                    <span
                        style="font-size: 13px; font-weight: bold; position: absolute; margin-left: 0px">Centre Code:&nbsp&nbsp [Centre-Code]
                    </span>
                    <br>
                    <!-- <span
                        style="font-size: 13px; font-weight: bold; position: absolute; margin-left: 0px">Course Name:&nbsp&nbsp <?= $student[0]['name']?>
                    </span> -->
                </div>
            </div>
            











            <br>
            <!-- <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">D/o,S/o,S/h:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;"><?= $student[0]['fathers_name']?></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspD.O.B: &nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['dob']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">Successfully Completion of Course:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['course_name']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold;position: absolute; margin-left: -300px">
                He/She has passed the examination With Grade:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;">
                <?php
                 if($student[0]['parcentage'] > 60){
                     echo "A";
                 }else if($student[0]['parcentage'] > 50 && $student[0]['parcentage'] < 60){

                 }
                 ?>
            </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOf duration:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['duration']?></span></span>
            <br><br> -->
            <!-- <span style="font-size: 10px; font-weight: bold">Your Performance In The Examination Is As Below</span><br> -->
            <table class="table table-bordered" style="font-size: 12px;">
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Maximum Theory</th>
                        <th>Maximum Practical</th>
                        <th>Minimum Theory</th>
                        <th>Minimum Practical</th>
                        <th>Th</th>
                        <th>Practical</th>
                        <th>total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($marks){
                            $total_max_theory = count($marks)*60;
                            $total_max_practical = count($marks)*40;
                            $total_min_theory = count($marks)*24;
                            $total_min_practical = count($marks)*16;
                            foreach($marks as $mark){
                    ?>
                    <tr>
                        <td> <?= $mark['subject']?></td>
                        <td>60</td>
                        <td>40</td>
                        <td>24</td>
                        <td>16</td>
                        <td><?= $mark['th_marks']?></td>
                        <td><?= $mark['practical_marks']?></td>
                        <td><?= $mark['total']?></td>
                    </tr>
                    <?php }}?>
                    <tr style="font-weight: bold;">
                    <td>TOTAL</td>
                    <td><?= $total_max_theory?></td>
                    <td><?= $total_max_practical?></td>
                    <td><?= $total_min_theory?></td>
                    <td><?= $total_min_practical?></td>
                    <td></td>
                    <td></td>
                    <td><?= $marks[0]['grand_total']?></td>
                    </tr>
                </tbody>
            </table>
            <span style="font-size: 12px; font-weight: bold; position: absolute; margin-left: 160px">Overall Parcentage:&nbsp&nbsp(<?= number_format($marks[0]['parcentage'], 2)?>%)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGrade:&nbsp&nbsp 
                <?php
                 if($student[0]['parcentage'] > 60){
                     echo "A";
                 }else if($student[0]['parcentage'] > 50 && $student[0]['parcentage'] < 60){

                 }
                 ?></span>
            <br><br>
            <!-- <span style="font-size: 17px; font-weight: bold">You may also visit to verify your result
                https://www.zcceducation.com/</span><br><br>
            <span style="font-size: 20px; font-weight: bold">On The Recomendation Of The Board Of
                Examiners</span><br><br>

          <br /><br />
          <small
            >Completion of the Azimuth Check and review of the Azimuth Check
            recommendations in ArmyFit is worth 1.0 hours in the Electronic
            Based Distance Learning (EBDL) program for USAR and ARNG Soldiers.
            For more information on the EBDL, see your unit training NCO.</small
          >
          <div class="bottom-txt">
            <span>G-1 DAPE-ARR-SF</span>
            <span>Completed on: April 3, 2020</span>
          </div> -->
        </div>
      </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</body>
</html>