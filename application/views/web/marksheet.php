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
        <img src="<?= base_url('uploads/cirtificate_img.png')?>" class="cert-bg" alt="" />
        <div class="cert-content" style="margin-top:20px;">
            <h1 class="other-font">Zcc Computer Education</h1>
            <span style="font-size: 12px;">[An Institute of Computer And IT education]</span><br>
            <span style="font-size: 12px; font-weight: bold">Regd. Under Ministry of Affairs By Govt. of
                India</span><br>
            <span style="font-size: 15px; font-weight: bold">RAn IAF ISO 9001:2015 Certified</span><br>
            <span style="font-size: 12px; font-weight: bold; margin-left:-90px; margin-right: 120px; position: absolute;">Website:
                www.zcceducation.com</span>
            <span style="position: absolute; margin-left: 220px">S.NO : 101</span>
            <h3 style="color:white;background: #2955a0;font-weight:bold; font-size: 25px;">
                <center>MARK LIST</center>
            </h3>
            <img src="<?= base_url($student[0]['img'])?>" alt="" style="height:100px; width:90px; position: absolute; right: 90px; margin-top: -20px; border: 1px solid" >
            <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">This Marksheet Is Awarded To Mr./Ms./Mrs:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;"><?= $student[0]['name']?></span>  
            </span>
            <br><br>
            <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">D/o,S/o,S/h:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;"><?= $student[0]['fathers_name']?></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspD.O.B: &nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['dob']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">Successfully Completion of Course:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['course_name']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold;position: absolute; margin-left: -300px">
                He/She has passed the examination With read:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;">
                <?php
                 if($student[0]['parcentage'] > 60){
                     echo "A";
                 }else if($student[0]['parcentage'] > 50 && $student[0]['parcentage'] < 60){

                 }
                 ?>
            </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOf duration:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['duration']?></span></span>
            <br><br>
            <span style="font-size: 10px; font-weight: bold">Your Performance In The Examination Is As Below</span><br>
            <table class="table table-bordered" style="font-size: 12px;">
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Maximum Theory</th>
                        <th>Maximum Practical</th>
                        <th>Minimum Theory</th>
                        <th>Minimum Practical</th>
                        <!-- <th> -->
                            <th>Th</th>
                            <th>Practical</th>
                            <th>total</th>
                        <!-- </th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($student){
                            foreach(){
                    ?>
                    <tr>
                        <td> Computer Network</td>
                        <td>80</td>
                        <td>20</td>
                        <td>35</td>
                        <td>5</td>
                        <td>50</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <!-- <?php $i=1; foreach($courses as $course){
                        $dateTime = new DateTime($course['created_at']); 
                        $dateOnly = $dateTime->format('d-m-Y');     
                    ?>
                    <tr>
                        <td><?= $i++?></td>
                        <td><?= $course['course_name']?></td>
                        <td><?= $course['course_description']?></td>
                        <td><?= $course['duration']?></td>
                        <td><img src="<?= base_url($course['image'])?>" alt="" style="width: 100px;height: 80px;"></td>
                        <td><?= $dateOnly?></td>
                        <td><a href="<?= base_url('admin/Pages/course_update?id='.$course['uid'])?>" class="btn btn-info text-light">View & Edit</a></td>
                        <td><a href="<?= base_url('admin/Pages/delete_course?id='.$course['uid'])?>" class="btn btn-danger text-light">Delete</a></td>
                    </tr>
                    <?php }?> -->
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <!-- <img src="<?= base_url($student[0]['img'])?>" alt="" style="height:100px; width:90px; position: absolute; right: 90px; margin-top: 40px; border: 1px solid" >
            <h1 class="other-font">This Is Certify That</h1>
            
            <span style="font-size: 15px; font-weight: bold;position: absolute; margin-left: -300px">Registration Number:</span>
            
            <br><br>
            <span
                style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">Mr./Ms./Mrs:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;"><?= $student[0]['name']?></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspD.O.B: &nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['dob']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">D/o,S/o,S/h:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['fathers_name']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold;position: absolute; margin-left: -300px">Course
                Duration:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['duration']?></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFrom:&nbsp&nbsp<span style="font-size: 20px; font-weight: bold;"><?= $student[0]['start_date']?></span>&nbsp&nbspTo:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;"><?= $student[0]['end_date']?></span></span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">He/She Has Passed The Final ExaminationConducted By (Exam
                Winng) In:</span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold; position: absolute; margin-left: -300px">In Our Authorised Study
                Centre:</span>
            <br><br>
            <span style="font-size: 15px; font-weight: bold;margin-left: -110px; position: absolute; margin-left: -300px">He/She Has passed The Examination
                With:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;"><?= number_format($student[0]['parcentage'], 2)?>(%)</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGrade:&nbsp&nbsp <span style="font-size: 20px; font-weight: bold;">
                <?php
                 if($student[0]['parcentage'] > 60){
                     echo "A";
                 }else if($student[0]['parcentage'] > 50 && $student[0]['parcentage'] < 60){

                 }
                 ?></span></span> -->
            <br><br><br><br>
            <span style="font-size: 17px; font-weight: bold">You may also visit to verify your result
                https://www.zcceducation.com/</span><br><br>
            <span style="font-size: 20px; font-weight: bold">On The Recomendation Of The Board Of
                Examiners</span><br><br>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</body>
</html>