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

<body>
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
            <form method="post" action="student_report_actions.php" class="needs-validation" novalidate>
                <h2 class="text-center">Student Report Details</h2>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="student_id"><span class="text-danger">* </span> Student ID:</label>
                            <input type="text" class="form-control" id="student_id" placeholder="Enter Student ID" name="student_id">
                            <!-- Start: The Error Message --><small class="form-text text-danger">Please enter a correct student id.</small>
                            <!-- End: The Error Message -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="first_name"><span class="text-danger">* </span> First name:</label>
                            <input type="text" class="form-control" id="first_name" placeholder="Enter First name" name="first_name">

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="last_name"><span class="text-danger">* </span> Last name:</label>
                            <input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="batch_class">Batch/Class:</label>
                            <input type="text" class="form-control" id="batch_class" placeholder="Enter Batch/Class" name="batch_class">

                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="email_address">Email address:</label>
                            <input type="email" class="form-control" id="email_address" placeholder="Enter Email address" name="email_address">

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
                                    <input type="text" class="form-control" id="english" placeholder="Enter English" name="english">

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="hindi"><span class="text-danger">* </span> Hindi:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="hindi" placeholder="Enter Hindi" name="hindi">

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="math"><span class="text-danger">* </span> Math:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="math" placeholder="Enter Math" name="math">

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
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
                                    <input type="text" class="form-control" id="science" placeholder="Enter Science" name="science">

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="history"><span class="text-danger">* </span> History:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="history" placeholder="Enter History" name="history">

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="geography"><span class="text-danger">* </span> Geography:</label>
                            <div class="row">
                                <div class="col-6 pr-0">
                                    <input type="text" class="form-control" id="geography" placeholder="Enter Geography" name="geography">

                                </div>
                                <div class="col-6 pl-1">
                                    <input type="text" class="form-control-plaintext" id="total" name="total" value="/100">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="remarks"><span class="text-danger">* </span> Remarks:</label>
                            <textarea class="form-control" name="remarks" id="remarks" placeholder="Remarks" rows="14"></textarea>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group"><button class="btn btn-primary" type="submit" name="insert">send </button></div>
                </div>
        </div>




        </form>
      
    <div role="dialog" tabindex="-1" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <h2 class="text-center">Contact us</h2>
                    </form>
                </div>
                <div class="modal-footer">
                    <h2 class="text-center">Pass</h2>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- End: Contact Form Clean -->
    <!-- Start: Footer Basic -->
    <div class="footer-basic">
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
</body>

</html>