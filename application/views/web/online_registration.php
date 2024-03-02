<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="wpo-contact-title">
                    <h2>Franchise Registration Form</h2>
                    <!-- <p>It is a long established fact that a reader will be distracted
                        content of a page when looking.</p> -->
                </div>
                <div class="wpo-contact-form-area">
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/Pages/franchise_registration') ?>" class="contact-validation-active" id="contact-form-main">
                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Franchise Type</label>
                                <select name="franchise_type" class="form-control" id="franchise_type" required>
                                    <option disabled selected>Select Franchise Type</option>
                                    <option value="free(5000)">Free Franchise(Rs.5000/-)*</option>
                                    <option value="paid(10000)">Paid Franchise(Rs.10000/-)*</option>
                                    <option value="paid(15000)">paid Franchise(Rs.15000/-)*</option>
                                    <option value="master(25000)">Master Franchise(Rs.25000/-)*</option>v
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Referral ID (Branch Code):</label>
                                <input type="text" class="form-control" name="ref_id" id="ref_id" placeholder="Don't fill in if you don't know" value="123">
                            </div>
                        </div>
                        
                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Centre Name:</label>
                                <input type="text" class="form-control" name="centre_name" id="centre_name" required value="Subhankar Study Centre">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Director's Name:</label>
                                <input type="text" class="form-control" name="directors_name" id="directors_name" required value="Subhankar Sharma">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Father's Name:</label>
                                <input type="text" class="form-control" name="fathers_name" id="fathers_name" required value="Sukumar Sharma">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Date of Birth:</label>
                                <input type="date" class="form-control" name="dob" id="dob" required value="15-01-2002">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Contact No.:</label>
                                <input type="number" class="form-control" name="contact" id="contact" required value="9679377775">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">E-mail:</label>
                                <input type="email" class="form-control" name="email" id="email" required value="subhankar12@gmail.com">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" required value="12345678">
                            </div>
                        </div>

                        <h3 style="color:white;background: #2955a0;font-weight:bold; "><center>Center Details</center></h3>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">State:</label>
                                <select name="centre_state" id="centre_state" class="form-control" required>
                                    <option disabled selected>Select State</option>
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
                                <input type="text" class="form-control" name="centre_district" id="centre_district" required value="Hooghly">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Centre Place:</label>
                                <input type="text" class="form-control" name="centre_place" id="centre_place" required value="Tarakeswar">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Block:</label>
                                <input type="text" class="form-control" name="centre_block" id="centre_block" required value="Tarakeswar">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Post Office:</label>
                                <input type="text" class="form-control" name="centre_post_office" id="post_office" required value="Tarakeswar">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Police Station:</label>
                                <input type="text" class="form-control" name="centre_police_station" id="police_station" required value="Tarakeswar">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Pin Code:</label>
                                <input type="number" class="form-control" name="centre_pin_code" id="pin_code" required value="712410">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Contact No.:</label>
                                <input type="number" class="form-control" name="centre_contact_no" id="contact_no" required value="9679377775">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Total Area (in sqft):</label>
                                <input type="text" class="form-control" name="total_area" id="total_area" required value="2000">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Total No. Of Computers:</label>
                                <input type="number" class="form-control" name="number_of_computers" id="number_of_computers" required value="50">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Total Staff:</label>
                                <input type="number" class="form-control" name="total_staff" id="total_staff" value="28">
                            </div>
                        </div>

                        <h3 style="color:white;background: #2955a0;font-weight:bold; "><center>Residential Details</center></h3>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">State:</label>
                                <select name="res_state" class="form-control" required>
                                    <option disabled selected>Select State</option>
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
                                <input type="text" class="form-control" name="res_district" id="district" required value="Hooghly">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Vill / Tahsil:</label>
                                <input type="text" class="form-control" name="res_vill" id="centre_place" required value="Tarakeswar">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-4">
                                <label for="">Block:</label>
                                <input type="text" class="form-control" name="res_block" id="block" required value="Tarakeswar">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Post Office:</label>
                                <input type="text" class="form-control" name="res_post_office" id="post_office" required value="Tarakeswar">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="">Police Station:</label>
                                <input type="text" class="form-control" name="res_police_station" id="police_station" required value="Tarakeswar">
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Pin Code:</label>
                                <input type="number" class="form-control" name="res_pin_code" id="pin_code" required value="712410">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Contact No.:</label>
                                <input type="number" class="form-control" name="res_contact_no" id="contact_no" required value="9679377775">
                            </div>
                        </div>

                        <h3 style="color:white;background: #2955a0;font-weight:bold; "><center>List of Required Documents</center></h3>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Center Director's Photo (jpg/png Only)*:</label>
                                <input type="file" class="" name="directors_photo[]" id="directors_photo" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Adhar Card (Both Side)(jpg/png Only)*:</label>
                                <input type="file" class="" name="aadhar_img[]" id="contact_no" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Centre Logo(png Only)*</label>
                                <input type="file" class="" name="centre_logo[]" id="pin_code" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Last Qualification (jpg/png Only)*</label>
                                <input type="file" class="" name="last_qualification_img[]" id="contact_no" required>
                            </div>
                        </div>

                        <div class="row fullwidth">
                            <div class="form-group col-sm-6">
                                <label for="">Centre Director Signature (png Only)*</label>
                                <input type="file" class="" name="directors_signature_img[]" id="pin_code" required>
                            </div>
                        </div>



                        <div class="submit-area">
                            <button type="submit" class="theme-btn-s4">Submit</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
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

