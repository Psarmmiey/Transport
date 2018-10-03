<!doctype html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/turbo/pages/forms/sample-forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Sep 2018 01:16:58 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="../../assets/vendors/jquery-ui-1.12.0/jquery-ui.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!--<div class="sidebar">
            <div class="logo">
                <a href="#" class="simple-text">
                    Turbo Admin
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    T
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="../index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#layouts" class="collapsed" aria-expanded="false">
                            <i class="material-icons">aspect_ratio</i>
                            <p>Layouts
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="layouts" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a href="../layouts/boxed-layout.html">Box Layout</a>
                                </li>
                                <li>
                                    <a href="../layouts/compact-menu.html">Compact Menu</a>
                                </li>
                                <li>
                                    <a href="../layouts/horizontal-menu.html">Horizontal Menu</a>
                                </li>
                                <li>
                                    <a href="../layouts/rtl-layout.html">RTL</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="../widgets/widgets.html">
                            <i class="material-icons">apps</i>
                            <p>Widgets</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#charts" class="collapsed" aria-expanded="false">
                            <i class="material-icons">equalizer</i>
                            <p>Charts
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="charts" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li>
                                    <a href="../charts/chart-js-charts.html">ChartJS</a>
                                </li>
                                <li>
                                    <a href="../charts/flot-charts.html">Flot</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#ui-elements" class="collapsed" aria-expanded="false">
                            <i class="material-icons">extension</i>
                            <p>UI Elements
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="ui-elements" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li><a href="../ui/accordions.html">Accordions</a></li>
                                <li><a href="../ui/alerts.html">Alerts</a></li>
                                <li><a href="../ui/buttons.html">Buttons</a></li>
                                <li><a href="../ui/colors.html">Colors</a></li>
                                <li><a href="../ui/grid.html">Grid System</a></li>
                                <li><a href="../ui/icons.html">Icons</a></li>
                                <li><a href="../ui/modals.html">Modals</a></li>
                                <li><a href="../ui/notifications.html">Notifications</a></li>
                                <li><a href="../ui/tabs.html">Tabs</a></li>
                                <li><a href="../ui/typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="active">
                        <a data-toggle="collapse" href="#forms" class="collapsed" aria-expanded="false">
                            <i class="material-icons">border_color</i>
                            <p>Forms
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="forms" aria-expanded="false">
                            <ul class="nav">
                                <li><a href="basic-elements.html">Basic Elements</a></li>
                                <li><a href="advanced-elements.html">Advanced Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li class="active"><a href="sample-forms.html">Sample Forms</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#tables" class="collapsed" aria-expanded="false">
                            <i class="material-icons">grid_on</i>
                            <p>Tables
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tables" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li><a href="../tables/tables.html">Simple Tables</a></li>
                                <li><a href="../tables/data-tables.html">Data Tables</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pages" class="collapsed" aria-expanded="false">
                            <i class="material-icons">content_copy</i>
                            <p>Pages
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pages" aria-expanded="false" style="height: 0px;">
                            <ul class="nav">
                                <li><a href="../sample-pages/template.html">Template</a></li>
                                <li><a href="../sample-pages/user-profile.html">User Profile</a></li>
                                <li><a href="../sample-pages/login.html">Login</a></li>
                                <li><a href="../sample-pages/signup.html">Sign Up</a></li>
                                <li><a href="../sample-pages/pricing-table.html">Pricing Table</a></li>
                                <li><a href="../sample-pages/invoice.html">Invoice</a></li>
                                <li><a href="../sample-pages/help-faqs.html">Help & FAQs</a></li>
                                <li><a href="../sample-pages/timeline.html">Timeline</a></li>
                                <li><a href="../sample-pages/404.html">404</a></li>
                                <li><a href="../sample-pages/500.html">500</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="../calendar/calendar.html">
                            <i class="material-icons">date_range</i>
                            <p>Calendar
                                <b class="caret"></b>
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="../docs/documentation.html">
                            <i class="material-icons">library_books</i>
                            <p>Documentation</p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>-->
        <?php
        require_once ("../../incl/sidebar.php");
        ?>
        <div class="main-panel">
            <?php
            require_once ("../../incl/navbar.php")
            ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card">
                                <form id="RegisterValidation" action="" method="post">
                                    <div class="card-content">
                                        <h4 class="card-title">ADD ROUTE</h4>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Depart From
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="from_where" type="text" required="true" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Destination
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="to_where" id="to_where" type="text" required="true" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Price
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="route_price" id="route_price" type="text" required="true" />
                                        </div>
                                        <div class="category form-category">
                                            <small>*</small> Required fields</div>
                                        <div class="form-footer text-right">

                                            <?php
                                                include ('../../incl/connect.php');
                                                function save_route() {
                                                    global $dbcon;
                                                    $location = $_POST['from_where'];
                                                    $destination = $_POST['to_where'];
                                                    $price = $_POST['route_price'];
                                                    if ($price > 0) {
                                                        $result = mysqli_query($dbcon, "Insert Into routes(from_where, destination, price) VALUES ('$location', '$destination', '$price')");
                                                        header("location: ../tables/routes.php");
                                                    }
                                                }

                                            ?>
                                            <button type="submit" onclick="<?php save_route();?>" class="btn btn-fill btn-default">Add Route</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Support
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Turbo Admin</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/material.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../../assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="../../assets/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="../../assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../../assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../../assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../../assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="../../assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../../assets/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../../assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../../assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../../assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>


<!-- Mirrored from www.urbanui.com/turbo/pages/forms/sample-forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Sep 2018 01:16:58 GMT -->
</html>