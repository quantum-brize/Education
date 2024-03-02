<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="wpo-contact-title">
                    <h2>Admission Form</h2>
                    <!-- <p>It is a long established fact that a reader will be distracted
                        content of a page when looking.</p> -->
                </div>
                <div class="wpo-contact-form-area">
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/Pages/student_registration') ?>"  class="contact-validation-active" id="contact-form-main">
                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Full Name:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Full Name" value="Rohit" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Father's Name:</label>
                                <input type="text" class="form-control" name="fathers_name" id="fathers_name" placeholder="Fathers Name" value="Kishore" required>
                            </div>
                        </div>
                        
                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Phone No:</label>
                                <input type="number" class="form-control" name="phone" id="phone" maxlength="10" value="9658462314" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">WhatsApp No.:</label>
                                <input type="number" class="form-control" name="whatsapp" id="whatsapp" maxlength="10" value="9658462314" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" value="rohit@gmail.com" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Date of Birth:</label>
                                <input type="date" class="form-control" name="dob" id="dob"  required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Aadhar:</label>
                                <input type="number" class="form-control" name="aadhar" id="aadhar" maxlength="12" value="658846231425" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" value="12345678" required>
                            </div>
                        </div>

                        <h3 style="color:white;background: #2955a0;font-weight:bold; "><center>Residential Details</center></h3>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">State:</label>
                                <select name="state" class="form-control" required>
                                    <option value="andhra_pradesh">Andhra Pradesh</option>
                                    <option value="arunachal_pradesh">Arunachal Pradesh</option>
                                    <option value="assam">Assam</option>
                                    <option value="bihar">Bihar</option>
                                    <option value="chandigarh">Chandigarh</option>
                                    <option value="chhattisgarh">Chhattisgarh</option>
                                    <option value="delhi">Delhi</option>
                                    <option value="goa">Goa</option>
                                    <option value="gujarat">Gujarat</option>
                                    <option value="haryana">Haryana</option>
                                    <option value="himachal_pradesh">Himachal Pradesh</option>
                                    <option value="jharkhand">Jharkhand</option>
                                    <option value="karnataka">Karnataka</option>
                                    <option value="kerala">Kerala</option>
                                    <option value="madhya_pradesh">Madhya Pradesh</option>
                                    <option value="maharashtra">Maharashtra</option>
                                    <option value="manipur">Manipur</option>
                                    <option value="meghalaya">Meghalaya</option>
                                    <option value="mizoram">Mizoram</option>
                                    <option value="nagaland">Nagaland</option>
                                    <option value="odisha">Odisha</option>
                                    <option value="puducherry">Puducherry</option>
                                    <option value="punjab">Punjab</option>
                                    <option value="rajasthan">Rajasthan</option>
                                    <option value="sikkim">Sikkim</option>
                                    <option value="tami_nadu">Tamil Nadu</option>
                                    <option value="telangana">Telangana</option>
                                    <option value="tripura">Tripura</option>
                                    <option value="uttar_pradesh">Uttar Pradesh</option>
                                    <option value="uttarakhand">Uttarakhand</option>
                                    <option value="west_bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">District:</label>
                                <input type="text" class="form-control" name="district" id="district" value="howrah" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Vill/City:</label>
                                <input type="text" class="form-control" name="vill_city" id="vill_city" value="liluah" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Block:</label>
                                <input type="text" class="form-control" name="block" id="block" value="liluah" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Post Office:</label>
                                <input type="text" class="form-control" name="post_office" id="post_office" value="liluah" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Police Station:</label>
                                <input type="text" class="form-control" name="police_station" id="police_station" value="liluah" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Pin Code:</label>
                                <input type="number" class="form-control" name="pin_code" id="pin_code" value="700001" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Contact No.:</label>
                                <input type="number" class="form-control" name="contact_no" id="contact_no" value="1425879635" required>
                            </div>
                        </div>

                        <!-- <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Total Area (in sqft):</label>
                                <input type="text" class="form-control" name="total_area" id="total_area">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Total No. Of Computers:</label>
                                <input type="number" class="form-control" name="number_of_computers" id="number_of_computers">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Total Staff:</label>
                                <input type="number" class="form-control" name="total_staff" id="total_staff">
                            </div>
                        </div> -->

                        <h3 style="color:white;background: #2955a0;font-weight:bold; "><center>Academic Background</center></h3>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Last Qualification:</label>
                                <input type="text" class="form-control" name="last_qualific" id="last_qualific" value="12th" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Passing Year:</label>
                                <input type="date" class="form-control" name="passing_year" id="passing_year" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Marks in Parcentage(%):</label>
                                <input type="text" class="form-control" name="parcentage" id="parcentage" value="84" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Marks:</label>
                                <input type="number" class="form-control" name="marks" id="marks" maxlength="5" value="420" required>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Examination Board:</label>
                                <input type="text" class="form-control" name="exam_board" id="exam_board" value="WBBHSE" required>
                            </div>
                        </div>

                        <h3 style="color:white;background: #2955a0;font-weight:bold; "><center>List of Required Documents</center></h3>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Student Photo (jpg/png Only)*:</label>
                                <input type="file" class="" name="student_photo[]" id="student_photo" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Adhar Card (Both Side)(jpg/png Only)*:</label>
                                <input type="file" class="" name="aadhar_img[]" id="aadhar_img" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Marksheet (jpg Only)*</label>
                                <input type="file" class="" name="marksheet_img[]" id="marksheet_img" required>
                            </div>
                        </div>



                        <div class="submit-area">
                            <button type="submit" class="theme-btn-s4">Submit</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end wpo-contact-pg-section -->

<!--  start wpo-contact-map -->
<section class="wpo-contact-map-section">
            <div class="wpo-contact-map">
            </div>
        </section>
        <!-- end wpo-contact-map -->

