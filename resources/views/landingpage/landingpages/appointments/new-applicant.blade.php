@extends('landingpage.navigation.navigation')

@section('content')
    <style>
        label{
            font-weight: 600;
        }
    </style>
    <div class="container-fuild">
        <form action="{{ route('new-applicant.create') }}" method="POST">
            @csrf
            <h1>New Applicant Form</h1><br><br>

            <h4>Personal Information</h4>
            <div class="row">
                <div class="col">
                    <label>Last Name :</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter last name" required>
                </div>
                <div class="col">
                    <label>First name :</label>
                    <input type="text" name="first_name" class="form-control" id="email" placeholder="Enter first name" required>
                </div>
                <div class="col">
                    <label>Middle Name :</label>
                    <input type="text" name="middle_name" class="form-control" placeholder="Enter middle name" required>
                </div>
                <div class="col">
                    <label>Suffix (Optional) :</label>
                    <input type="text" name="suffix" class="form-control" placeholder="Enter Affiliation">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Age :</label>
                    <input type="text" class="form-control" name="age">
                </div>
                <div class="col">
                    <label>Date of Birth :</label>
                    <input type="date" class="form-control" name="birthday">
                </div>       
                <div class="col">
                    <label>Religion :</label>
                    <input type="text" class="form-control" name="religion">
                </div>
                <div class="col">
                    <label>Ethnic Group :</label>
                    <input type="text" class="form-control" name="ethnic_group">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Sex :</label>
                    <select name="sex" class="custom-select mb-3">
                        <option selected>Please select a gender</option>
                        <option value="Male">Male</option>  
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col">
                    <label>Civil Status:</label>
                    <select name="civil_status" class="custom-select mb-3">
                        <option selected>Please select a civil status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow/er">Widow/er</option>
                        <option value="Seperated">Seperated</option>
                        <option value="Co-habitation(Live-in)">Co-habitation(Live-in)</option>
                    </select>
                </div>
                <div class="col">
                    <label>Blood Type:</label>
                    <select name="blood_type" class="custom-select mb-3">
                        <option selected>Please select Blood type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Type of Disability :</label>
                    <select name="disability_type" class="custom-select mb-3">
                        <option selected>Please select disability type</option>
                        <option value="Deaf/Hard of hearing">Deaf/Hard of hearing</option>
                        <option value="Intellecttual Disability">Intellecttual Disability</option>
                        <option value="Learning Disability imparement">Learning Disability imparement</option>
                        <option value="Mental Disability">Mental Disability</option>
                        <option value="Physical Disability">Physical Disability</option>
                        <option value="Psychosocial Disability">Psychosocial Disability</option>
                        <option value="Speech and Language">Speech and Language</option>
                        <option value="Visual Disablity">Visual Disablity</option>
                    </select>
                </div>
                <div class="col">
                    <label>Cause of Disablity:</label>
                    <select name="disability_cause" class="custom-select mb-3">
                        <option selected>Please select a civil status</option>
                        <option value="Acquired">Acquired</option>
                        <option value="Cancer">Cancer</option>
                        <option value="Chronic Illness">Chronic Illness</option>
                        <option value="Congenital/Inborn">Congenital/Inborn</option>
                        <option value="Injury">Injury</option>
                        <option value="Rare Disease">Rare Disease</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-5">
                    <label style="display: flex">Address :</label>
                    <input type="text" class="form-control" placeholder="Block/Lot/House No./Purok/Street/Subdivision/Village" name="address">
                </div>
                <div class="col-sm-3">
                    <label>Barangay</label>
                    <select  name="barangay" class="custom-select mb-3">
                        <option selected>Select Barangay</option>
                        <option value="Baclaran">Baclaran</option>
                        <option value="Banay-Banay">Banay-Banay</option>
                        <option value="Banlic">Banlic</option>
                        <option value="Bigaa">Bigaa</option>
                        <option value="Butong">Butong</option>
                        <option value="Casile">Casile</option>
                        <option value="Diezmo">Diezmo</option>
                        <option value="Gulod">Gulod</option>
                        <option value="Mamatid">Mamatid</option>
                        <option value="Marinig">Marinig</option>
                        <option value="Niugan">Niugan</option>
                        <option value="Pittland">Pittland</option>
                        <option value="Pulo">Pulo</option>
                        <option value="Sala">Sala</option>
                        <option value="San Isidro">San Isidro</option>
                        <option value="Barangay I Poblacion">Barangay I Poblacion</option>
                        <option value="Barangay II Poblacion">Barangay II Poblacion</option>
                        <option value="Barangay III Poblacion">Barangay III Poblacion</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label>City</label>
                    <h6 style="margin-top: 8px">Cabuyao City</h6>
                </div>
                <div class="col-sm-2">
                    <label>Province </label>
                    <h6>Laguna</h6>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Phone No. :</label>
                    <input type="text" class="form-control" name="phone_number">
                </div>
                <div class="col">
                    <label>Telephone No. :</label>
                    <input type="text" class="form-control" name="telephone_number">
                </div>
               
                <div class="col">
                    <label>Email Address :</label>
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Educational Attaintment :</label>
                    <select name="educational_attainment" class="custom-select mb-3">
                        <option selected>Please select</option>
                        <option value="None">None</option>
                        <option value="Elementary Education">Elementary Education</option>
                        <option value="High School Education">High School Education</option>
                        <option value="College">College</option>
                        <option value="Postgraduate Program">Postgraduate Program</option>
                        <option value="Non-Formal Education">Non-Formal Education</option>
                        <option value="Vocational">Vocational</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Status of Employment :</label>
                    <select name="employment_status" class="custom-select mb-3">
                        <option selected>Please select</option>
                        <option value="Employed">Employed</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Self-Employed">Self-Employed</option>
                    </select>
                </div>
                <div class="col">
                    <label>Category of Employment :</label>
                    <select name="employment_category" class="custom-select mb-3">
                        <option selected>Please select</option>
                        <option value="Goverment">Goverment</option>
                        <option value="Private">Private</option>          
                    </select>
                </div>
                <div class="col">
                    <label>Type of Employment :</label>
                    <select name="employment_type" class="custom-select mb-3">
                        <option selected>Please select</option>
                        <option value="Goverment">Permanent</option>
                        <option value="Goverment">Regular</option>
                        <option value="Goverment">Contractual</option>
                        <option value="Goverment">Casual</option>
                        <option value="Private">Self-employed</option>        
                        <option value="Private">Seasonal</option>    
                        <option value="Private">Emergency</option>      
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Occupation :</label>
                    <input type="text" class="form-control" name="occupation">
                </div>
            </div><br>
            <h4>Organization Information</h4><br>
            <div class="row">
                <div class="col">
                    <label>Organization Affiliated : </label>
                    <input type="text" class="form-control" name="organization_affliated">
                </div>
                <div class="col">
                    <label>Contact Person : </label>
                    <input type="text" class="form-control" name="organization_contact_person">
                </div>
                <div class="col">
                    <label>Office Address :</label>
                    <input type="text" class="form-control" name="organization_office_address">
                </div>
                <div class="col">
                    <label>Tel. Nos : </label>
                    <input type="text" class="form-control" name="organization_telephone_number">
                </div>
            </div><br>
            <h4>ID Reference No.</h4>
            <div class="row">
                <div class="col">
                    <label>SSS No. : </label>
                    <input type="text" class="form-control" name="sss_number">
                </div>
                <div class="col">
                    <label>GSIS No. : </label>
                    <input type="text" class="form-control"name="gsis_number">
                </div>
                <div class="col">
                    <label>Pag-ibig No. : </label>
                    <input type="text" class="form-control" name="pagibig_number">
                </div>
                <div class="col">
                    <label>PhilHealth No. : </label>
                    <input type="text" class="form-control" name="philhealth_number">
                </div>
            </div><br>
            <h4>Family Background</h4>
            <div class="row">
                <div class="col">
                    <label>Father's Name : </label>
                    <input type="text" class="form-control" name="father_name">
                </div>
                <div class="col">
                    <label>Mother's Name : </label>
                    <input type="text" class="form-control" name="mother_name">
                </div>
                <div class="col">
                    <label>Guardian's Name : </label>
                    <input type="text" class="form-control" name="guardian_name">
                </div>
            </div>

            <input type="button" value="Next" class="btn btn-primary " data-toggle="modal" data-target="#select-date">
            <!-- The Modal -->
            <div class="modal fade" id="select-date">
                <div class="modal-dialog">
                    <div class="modal-content">
                <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Select</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div style="text-align: center">
                                <h5 >Select Appointment Date</h5>
                                <input type="date" id="txtDate" placeholder="Select Date" name="appointment_date"/>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Confirm</button>
                            <input type="button" value="Cancel" class="btn btn-danger" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <link href="http://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript">
        // $(function () {
        //     $("#txtDate").datepicker({
        //         defaultDate: "+1w",
        //         changeMonth: true,
        //         numberOfMonths: 1,
        //         beforeShowDay: $.datepicker.noWeekends
        //     });
        // });
    </script>
@endsection