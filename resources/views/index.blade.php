@extends('master')
@section('main')
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <div class="row align-items-center">
                <div class="col-xs-6 col-md-6 col-lg-6 login-form">
                     <h3 class="head">Already a Member?</h3>
                     <div class="login-form-inner col-xs-6 col-md-12 col-lg-6">
                      <form >
                         <input type="text" name="" placeholder="Enter your ID" class="form-control login-form-control">
                         <input type="text" name="" placeholder="Password" class="form-control login-form-control">
                         <button class="btn btn-primary btn-lg login-form-control logButton">Login</button>
                     </form>
                    </div>
                </div>
                <div class="col-xs-6 col-md-12 col-lg-6 registration-form">
                    <h3>REGISTRATION FORM</h3>
                    <form class="form-contact contact_form" action="http://localhost:8001/user" method="POST" id="uniAlumuniForm" novalidate="novalidate">
                        <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">First Name</label>
                                        <input class="form-control register-form-control" name="firstName" id="name" type="text" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">Last Name</label>
                                        <input class="form-control register-form-control" name="lastName" id="email" type="text"  autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">Date Of Birth</label>
                                        <input class="form-control register-form-control" name="dateOfBirth"   type="date" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">Subject</label>
                                        <input class="form-control register-form-control" name="subject" id="" type="text"  autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">Select Type</label>
                                        <select class="form-control register-form-control" name="userType" id="userType" required>
                                            <option></option>
                                            <option value="1">Student</option>
                                            <option value="2">Alumuni</option>
                                            <option value="3">Teacher</option>
                                            <option value="4">Co-ordinator</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="label ">Gender</label><br>
                                    <input class="" name="gender" id="" type="radio" value="male" checked><label class="label labe-radio">Male</label>
                                    <input class="" name="gender" id="" type="radio" value="female"><label class="label">Female</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">Phone No</label>
                                        <input class="form-control register-form-control" name="phoneNumber" id="" type="text" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label">Email</label>
                                        <input class="form-control register-form-control" name="email" id="email" type="email"  autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="joinningDate">
                                    <div class="form-group">
                                        <label class="label">Joinning Date</label>
                                        <input class="form-control register-form-control" name="joinningDate" id="" type="date" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="releavingDate">
                                    <div class="form-group">
                                        <label class="label">Releaving Date</label>
                                        <input class="form-control register-form-control" name="releavingDate" id="" type="date"  autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-sm-6" id="admissionNo">
                                    <div class="form-group">
                                        <label class="label">Admission No</label>
                                        <input class="form-control register-form-control" name="admissionNo" id="" type="text"  autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6" id="departmentNo">
                                    <div class="form-group">
                                        <label class="label">Department No</label>
                                        <input class="form-control register-form-control" name="departmentNo" id="" type="" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="teacherId">
                                    <div class="form-group">
                                        <label class="label">Teacher Id</label>
                                        <input class="form-control register-form-control" name="teacherId" id="" type="text" autocomplete="off" required>
                                    </div>
                                </div>
                            <div class="col-sm-12" id="coordiantorNo">
                                <div class="form-group">
                                    <label class="label">Coordinator Id</label>
                                    <input class="form-control register-form-control" name="coordinatorId" id="subject" type="text" autocomplete="off" >
                                </div>
                            </div>

                            <div class="col-sm-12" id="Address">
                                <div class="form-group">
                                    <label class="label">Address</label>
                                    <textarea class="form-control register-form-control" name="address" id="address" type="text" autocomplete="off" ></textarea>
                                </div>
                            </div>
                                {{--<div class="col-sm-12">
                                    <div class="box">
                                        <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                                    </div>
                                </div>--}}


<!--                            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">-->
<!--                            <div class=" col-sm-6 col-md-6 col-xs-6 col-lg-6" style="padding-left: 0px; margin: 0px;    ">-->
<!--                               -->
<!--                            </div>-->
<!--                                <div class="col-sm-6 col-md-6 col-xs-6 col-lg-6">-->
<!--                                   -->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary nextButton"></input>
                                </div>
                            </div>
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 check">
                                <div class="form-group">
                                    <input type="checkbox"><p class="check-p"> I have read and agree to the <span style="color: #265cce;">Alumini</span> <a href="#" style="text-decoration: underline;">Terms Of Service</a></b></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/pnotify@4.0.0/dist/umd/PNotify.js"></script>
        <script>
            $(document).ready(function(){
                //hide all the things
                $('#joinningDate').hide();
                $('#releavingDate').hide();
                $('#departmentNo').hide();
                $('#teacherId').hide();
                $('#admissionNo').hide();
                $('#coordiantorNo').hide();
                //select tags
                $("#userType").change(function(){
                    var value =  $("#userType option:selected").val();
                    if(value == 1){
                        $('#joinningDate').show();
                        $('#admissionNo').show();
                        $('#releavingDate').hide();
                        $('#teacherId').hide();
                        $('#departmentNo').hide();
                        $('#coordiantorNo').hide();
                    }
                    if(value == 2){
                        $('#joinningDate').hide();
                        $('#releavingDate').show();
                        $('#admissionNo').show();
                        $('#teacherId').hide();
                        $('#departmentNo').hide();
                        $('#coordiantorNo').hide();
                    }
                    if(value == 3){
                        $('#joinningDate').show();
                        $('#releavingDate').hide();
                        $('#admissionNo').hide();
                        $('#teacherId').show();
                        $('#departmentNo').show();
                        $('#coordiantorNo').hide();
                    }
                    if(value == 4){
                        $('#joinningDate').hide();
                        $('#releavingDate').hide();
                        $('#admissionNo').hide();
                        $('#teacherId').hide();
                        $('#departmentNo').hide();
                        $('#coordiantorNo').show();
                    }
                });

                $("#uniAlumuniForm").validate({
                    submitHandler: function(form) {
                        form.submit();
                    },
                    ignore: [],
                    rules: {
                        'firstName': {
                            required: true,
                        },
                        'dateOfBirth': {
                            required: true,
                        },
                        'userType': {
                            required: true,
                        },
                        'gender': {
                            required: true,
                        },
                        'email': {
                            required: true,
                            email : true
                        },
                    }
                });

                $("#uniAlumuniForm").submit(function(e) {
                    var token = document.getElementsByName("csrfToken").value;
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    var form = $(this);
                    var url = form.attr('action');
                    $.ajax({
                        type: "POST",
                        url: url,
                        crossDomain : true,
                        headers: {
                            'X-CSRF-Token': token
                        },
                        data: form.serialize(), // serializes the form's elements.
                        success: function(data)
                        {
                            var responseData = JSON.stringify(data);
                            var jsonparse = JSON.parse(responseData);
                            console.log("jsonparse",jsonparse);
                            for(var mainData in jsonparse){
                                if(mainData === 'Validation Error'){
                                    PNotify.error({
                                        title: "Validation Error",
                                        text: 'Please Fill correct Data'
                                    });
                                }
                                if(mainData === 'true'){
                                    PNotify.success({
                                        title: "Success",
                                        text: 'User Registered Successfully'
                                    });
                                    $('#uniAlumuniForm')[0].reset();
                                }
                                else {
                                    if (mainData === 'errorNew'){
                                        PNotify.error({
                                            title: "Database Exception",
                                            text: 'Contact To The service Provider'
                                        });
                                     }
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            console.log(textStatus);
                            /*alert("error");*/
                        }
                    });
                });

            })
        </script>
@stop
