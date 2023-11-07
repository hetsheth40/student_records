<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agaetis Technologies</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=a66ba5d3ba3d27fe9c26f19627fa1a35">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css?h=cfa788754642173dafbd830bd7969fdb">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css?h=c942239c91f94a6b90d67fb2496c21bf">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="assets/css/Data-Table.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css?h=d15dfcb68fabe0442ff06063b052477c">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css?h=8f120d33c0bf092c48e3c98c6b1cd5d3">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css?h=bd36a0e1e15ca19cbc401cc5f46ca8ca">
    <link rel="stylesheet" href="assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php">Agaetis Technologies<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="records.php">Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End: Navigation Clean -->
    <!-- Start: Contact Form Clean -->
    <div class="contact-clean">
        <div class="container">
            <form method="post" id="form">
                <div id="error"> <?php
                                    session_start();
                                    if (isset($_SESSION['message'])) {
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                    } ?>
                </div>
                <h2 class="text-center">Student Report Details</h2>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="student_id"><span class="text-danger">* </span> Student ID:</label>
                            <input type="text" class="form-control" id="student_id" placeholder="Enter Student ID" name="student_id" pattern="^[0-9]*$" title="Must be Numeric" maxlength="3" required autofocus>
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="student_id_error1">Please enter a correct student id</small><!-- End: The Error Message -->
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="student_id_error2">Please enter student id in numeric format(i.e 1, 22,333.)</small><!-- End: The Error Message -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="first_name"><span class="text-danger">* </span> First name:</label>
                            <input type="text" class="form-control" id="first_name" placeholder="Enter First name" name="first_name" pattern="^(?=.*[a-zA-Z]{3})[A-Za-z]+$" title="Must be Alphabets" minlength="3" required>
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="first_name_error1">Please enter a correct first name</small><!-- End: The Error Message -->
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="first_name_error2">Please enter first name in alphabets format and minimum 3 alphabets(i.e het, Het, etc.)</small><!-- End: The Error Message -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="last_name"><span class="text-danger">* </span> Last name:</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name" pattern="^(?=.*[a-zA-Z]{3})[A-Za-z]+$" title="Must be Alphabets" minlength="3" required>
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="last_name_error1">Please enter a correct last name</small> <!-- End: The Error Message -->
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="last_name_error2">Please enter last name in alphabets format and minimum 3 alphabets(i.e het, Het, etc.)</small> <!-- End: The Error Message -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="batch_class">Batch/Class:</label>
                            <input type="text" class="form-control" id="batch_class" placeholder="Enter Batch/Class" name="batch_class" pattern="^[a-zA-Z0-9]*$" title="Must be Alphabets/Numeric" minlength="2">
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="batch_class_error1">Please enter a correct batch/class</small> <!-- End: The Error Message -->
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="batch_class_error2">Please enter batch/class in alphabets/numeric format(i.e a, A, 1, a1, A1, 1a, 1A.)</small> <!-- End: The Error Message -->
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="email_address">Email address:</label>
                            <input type="email" class="form-control" id="email_address" placeholder="Enter Email address" name="email_address" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="Must be Email address">
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="email_address_error1">Please enter a correct email address</small> <!-- End: The Error Message -->
                            <!-- Start: The Error Message --><small class="form-text  d-none" id="email_address_error2">Please enter a correct format of email address(i.e someone@someone.com.)</small> <!-- End: The Error Message -->
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <h5 class="text-center">Data entry for Following Subjects:</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="english"><span class="text-danger">* </span> English:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="english" placeholder="Enter English" name="english" pattern="^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$" title="Must be Numeric" maxlength="5" required>

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="english_error1">Please enter a correct english score</small> <!-- End: The Error Message -->
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="english_error2">Please enter a correct format english score(i.e 40,40.40.)</small> <!-- End: The Error Message -->
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="hindi"><span class="text-danger">* </span> Hindi:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="hindi" placeholder="Enter Hindi" name="hindi" pattern="^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$" title="Must be Numeric" maxlength="5" required>

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="hindi_error1">Please enter a correct hindi score</small> <!-- End: The Error Message -->
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="hindi_error2">Please enter a correct format hindi score(i.e 40,40.40.)</small> <!-- End: The Error Message -->
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="math"><span class="text-danger">* </span> Math:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="math" placeholder="Enter Math" name="math" pattern="^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$" title="Must be Numeric" maxlength="5" required>

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="math_error1">Please enter a correct math score</small> <!-- End: The Error Message -->
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="math_error2">Please enter a correct format math score(i.e 40,40.40.)</small> <!-- End: The Error Message -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="science"><span class="text-danger">* </span> Science:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="science" placeholder="Enter Science" name="science" pattern="^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$" title="Must be Numeric" maxlength="5" required>

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="science_error1">Please enter a correct science score</small> <!-- End: The Error Message -->
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="science_error2">Please enter a correct format science score(i.e 40,40.40.)</small> <!-- End: The Error Message -->
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="history"><span class="text-danger">* </span> History:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="history" placeholder="Enter History" name="history" pattern="^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$" title="Must be Numeric" maxlength="5" required>

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="history_error1">Please enter a correct history score</small> <!-- End: The Error Message -->
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="history_error2">Please enter a correct format history score(i.e 40,40.40.)</small> <!-- End: The Error Message -->
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="geography"><span class="text-danger">* </span> Geography:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="geography" placeholder="Enter Geography" name="geography" pattern="^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$" title="Must be Numeric" maxlength="5" required>

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="geography_error1">Please enter a correct geography score</small> <!-- End: The Error Message -->
                                <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="geography_error2">Please enter a correct format geography score(i.e 40,40.40.)</small> <!-- End: The Error Message -->
                            </div>

                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="remarks"> Remarks:</label>
                            <textarea class="form-control" name="remarks" id="remarks" placeholder="Remarks" rows="14" pattern="^[a-zA-Z0-9]*$" title="Must be Alphabets/Numeric" maxlength="150"></textarea>
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="remarks_error1">Please enter a correct remarks</small> <!-- End: The Error Message -->
                            <!-- Start: The Error Message --><small class="form-text text-danger d-none" id="remarks_error2">Please enter remarks in alphabets/numeric format(i.e a, A, 1, a1, A1, 1a, 1A.)and Max alphabets allow is 150</small> <!-- End: The Error Message -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group"><button class="btn btn-primary" type="submit" name="insert" onClick="event.preventDefault();validation();">send </button></div>
                </div>
        </div>




        </form>

        <div id="view_student_data" role="dialog" tabindex="-1" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Student Report</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container p-2 bg-white">
                            <div class="table-responsive">
                                <!-- Start: Data Table -->
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Batch/Class</th>
                                            <th>Email address</th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody id="diplay_student_data">

                                    </tbody>
                                </table>
                                <!-- End: Data Table -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- End: Contact Form Clean -->
    <!-- Start: Footer Basic -->
    <div class="footer-basic mt-auto">
        <footer>
            <!-- Start: Social Icons -->
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <!-- End: Social Icons -->
            <!-- Start: Links -->
            <ul class="list-inline">
                <li class="list-inline-item active"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="records.php">Records</a></li>
                <li class="list-inline-item"><a href="#">About Us</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <!-- End: Links -->
            <!-- Start: Copyright -->
            <p class="copyright">Agaetis Technologies&nbsp;© 2023</p>
            <!-- End: Copyright -->
        </footer>
    </div>
    <!-- End: Footer Basic -->
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script>
        function validating_data(id, id_data, validator, trim) {

            if ($.trim(id_data) == '' && trim == true) {
                $('#' + id + '_error1').removeClass('d-none');
                $('#' + id + '_error2').addClass('d-none');
                return false;
            } else {
                if (id_data.match(validator)) {
                    $('#' + id + '_error1').addClass('d-none');
                    $('#' + id + '_error2').addClass('d-none');
                    return true;
                } else if ($.trim(id_data) != '') {
                    $('#' + id + '_error1').addClass('d-none');
                    $('#' + id + '_error2').removeClass('d-none');
                    return false;
                }
            }
        }

        function validation() {

            //validator variable
            var numeric = /^[0-9]*$/g;
            var alphabets = /^(?=.*[a-zA-Z]{3})[A-Za-z]+$/g;
            var alphanumeric = /^[a-zA-Z0-9]*$/g;
            var email_validator = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/g;
            var decimalnumeric = /^\d{1,2}$|(?=^.{1,5}$)^\d+\.\d{0,2}$/g;
            var verification_staus = [true];

            //data variable
            var student_id = $('#student_id').val();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var batch_class = $('#batch_class').val();
            var email_address = $('#email_address').val();
            var english = $('#english').val();
            var hindi = $('#hindi').val();
            var math = $('#math').val();
            var science = $('#science').val();
            var history = $('#history').val();
            var geography = $('#geography').val();
            var remarks = $('#remarks').val();

            verification_staus[0] = validating_data(id = "student_id", student_id, numeric, trim = true);
            verification_staus[1] = validating_data(id = "first_name", first_name, alphabets, trim = true);
            verification_staus[2] = validating_data(id = "last_name", last_name, alphabets, trim = true);
            verification_staus[3] = validating_data(id = "batch_class", batch_class, alphanumeric, trim = false);
            verification_staus[4] = validating_data(id = "email_address", email_address, email_validator, trim = false);
            verification_staus[5] = validating_data(id = "english", english, decimalnumeric, trim = true);
            verification_staus[6] = validating_data(id = "hindi", hindi, decimalnumeric, trim = true);
            verification_staus[7] = validating_data(id = "math", math, decimalnumeric, trim = true);
            verification_staus[8] = validating_data(id = "science", science, decimalnumeric, trim = true);
            verification_staus[9] = validating_data(id = "history", history, decimalnumeric, trim = true);
            verification_staus[10] = validating_data(id = "geography", geography, decimalnumeric, trim = true);
            verification_staus[11] = validating_data(id = "remarks", remarks, alphanumeric, trim = false);

            if (verification_staus.includes(false) == false) {

                $.post('student_report_actions.php', {
                        action: 'insert',
                        student_id: student_id,
                        first_name: first_name,
                        last_name: last_name,
                        batch_class: batch_class,
                        email_address: email_address,
                        english: english,
                        hindi: hindi,
                        math: math,
                        science: science,
                        history: history,
                        geography: geography,
                        remarks: remarks
                    },
                    function(data) {
                        $.post('student_report_actions.php', {
                                action: 'view',
                                student_id: student_id
                            },
                            function(data) {
                                $('#diplay_student_data').html(data);
                                $('#view_student_data').modal('toggle')
                            });

                    });
            }
        }
    </script>
</body>

</html>