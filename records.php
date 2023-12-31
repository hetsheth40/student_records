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

<body class="d-flex flex-column min-vh-100" style="background-color:#f1f7fc;" onload="diplay_student_data();">
    <!-- Start: Navigation Clean -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php">Agaetis Technologies<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="records.php">Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">About us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End: Navigation Clean -->
    <!-- Start: Contact Form Clean -->
    <div class="contact-clean">
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
    <div id="error_view_student_data" role="dialog" tabindex="-1" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Error to view Student Records</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" onclick="location_changing()">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="container p-2 bg-white">
                        <div class="table-responsive">
                            <h2>Sorry This page is not allow to visit because mysql connection is not made</h2>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

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
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item active"><a href="records.php">Records</a></li>
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
        function location_changing() {
            var current_url = window.location.href;
            var current_path = window.location.pathname;
            var new_path = "/index.php";
            var new_url = current_url.replace(current_path, new_path)
            window.location.assign(new_url)
        }

        function diplay_student_data() {
            $.post('student_report_actions.php', {
                action: 'view'
            }).done(function(data) {
                $('#diplay_student_data').html(data);
            }).fail(function() {
                $('#diplay_student_data').html('<tr><td colspan="6">No Data Found</td></tr>');
                $('#error_view_student_data').modal('toggle');
            });
        }
    </script>
</body>

</html>