<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TA - User Interface</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'>
        <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"  rel='stylesheet'>
    </head>
    <body>
        <?php $firstName = $_SESSION['firstName']; //echo "FIRST NAME: $firstName"; ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">
                        <img src="./../img/logo150_150.png" width="60px" />Welcome <?php echo $firstName ?> 
                    </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li><a href="#">Support </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>My Flights <b class="label green pull-right">
                                    11</b> </a>
                                </li>
                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i>New Flight </a></li>
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Reservations <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="module-head"><h3>Your next flight</h3></div>
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="fas fa-route"></i><b>15.02.2020 / 20:00</b>
                                        <p class="text-muted">
                                           Date/Boarding Time</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-plane"></i><b>Lufthansa</b>
                                        <p class="text-muted">
                                            Carrier</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-suitcase"></i><b>4/96/36C</b>
                                        <p class="text-muted">
                                            Terminal/Gate/Seat</p>
                                    </a>
                                </div>
                                <div class="module-head"><h3>Packing</h3></div>
                                <div class="btn-box-row row-fluid">
                                <div class="module-body table">								
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-icon"></td>
                                                <td class="cell-title">Task</td>
                                                <td class="cell-status hidden-phone hidden-tablet">Status</td>
                                                <td class="cell-time align-right">Due Date</td>
                                            </tr>
                                            <tr class="task">
                                                <td class="cell-icon"><i class="icon-checker high"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"><b class="due">Missed</b></td>
                                                <td class="cell-time align-right">Just Now</td>
                                            </tr>
                                            <tr class="task">
                                                <td class="cell-icon"><i class="icon-checker"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"><b class="due">Missed</b></td>
                                                <td class="cell-time align-right">Just Now</td>
                                            </tr>
                                            <tr class="task">
                                                <td class="cell-icon"><i class="icon-checker"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"><b class="due">Missed</b></td>
                                                <td class="cell-time align-right">Yesterday</td>
                                            </tr>
                                            <tr class="task resolved">
                                                <td class="cell-icon"><i class="icon-checker high"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"></td>
                                                <td class="cell-time align-right">15 July 2014</td>
                                            </tr>
                                            <tr class="task resolved">
                                                <td class="cell-icon"><i class="icon-checker high"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"></td>
                                                <td class="cell-time align-right">15 July 2014</td>
                                            </tr>
                                            <tr class="task resolved">
                                                <td class="cell-icon"><i class="icon-checker high"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"></td>
                                                <td class="cell-time align-right">15 July 2014</td>
                                            </tr>
                                            <tr class="task resolved">
                                                <td class="cell-icon"><i class="icon-checker high"></i></td>
                                                <td class="cell-title"><div>Lorem ipsum dolor sit et, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></td>
                                                <td class="cell-status hidden-phone hidden-tablet"></td>
                                                <td class="cell-time align-right">15 July 2014</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>

        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.table-message tbody tr').click(
                    function() 
                    {
                        $(this).toggleClass('resolved');
                    }
                );
            } );
	</script>
    </body>
</html>
