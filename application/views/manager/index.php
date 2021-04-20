<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <title>Neon | Dashboard</title>


    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-core.css">
    <link rel="stylesheet" href="assets/css/neon-theme.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="assets/js/jquery-1.11.0.min.js"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body class="page-body  page-fade" data-url="http://neon.dev">

    <div class="page-container">
        <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">


            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo@2x.png" width="120" alt="" />
                    </a>
                </div>

                <!-- logo collapse icon -->

                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon with-animation">
                        <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>



                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation">
                        <!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

            </header>






            <ul id="main-menu" class="">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <!-- Search Bar -->
                <li id="search">
                    <form method="get" action="">
                        <input type="text" name="q" class="search-input" placeholder="Search something..." />
                        <button type="submit">
                            <i class="entypo-search"></i>
                        </button>
                    </form>
                </li>
                <li class="active opened active">
                    <a href="index.html">
                        <i class="entypo-gauge"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="index.html">
                                <span>Dashboard 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span>Dashboard 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <div class="main-content">

            <div class="row">

                <!-- Profile Info and Notifications -->
                <div class="col-md-6 col-sm-8 clearfix">

                    <ul class="user-info pull-left pull-none-xsm">

                        <!-- Profile Info -->
                        <li class="profile-info dropdown">
                            <!-- add class "pull-right" if you want to place this from right -->

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
                                Art Ramadani
                            </a>

                            <ul class="dropdown-menu">

                                <!-- Reverse Caret -->
                                <li class="caret"></li>

                                <!-- Profile sub-links -->
                                <li>
                                    <a href="extra-timeline.html">
                                        <i class="entypo-user"></i>
                                        Edit Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="mailbox.html">
                                        <i class="entypo-mail"></i>
                                        Inbox
                                    </a>
                                </li>

                                <li>
                                    <a href="extra-calendar.html">
                                        <i class="entypo-calendar"></i>
                                        Calendar
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="entypo-clipboard"></i>
                                        Tasks
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>



                </div>


                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                    <ul class="list-inline links-list pull-right">

                        <li>
                            <a href="<?= base_url('auth/logout'); ?>">
                                Log Out <i class="entypo-logout right"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <hr />


            <div class="row">
                <div class="col-sm-3">

                    <div class="tile-stats tile-red">
                        <div class="icon"><i class="entypo-users"></i></div>
                        <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div>

                        <h3>Registered users</h3>
                        <p>so far in our blog, and our website.</p>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="tile-stats tile-green">
                        <div class="icon"><i class="entypo-chart-bar"></i></div>
                        <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

                        <h3>Daily Visitors</h3>
                        <p>this is the average value.</p>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="tile-stats tile-aqua">
                        <div class="icon"><i class="entypo-mail"></i></div>
                        <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div>

                        <h3>New Messages</h3>
                        <p>messages per day.</p>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="tile-stats tile-blue">
                        <div class="icon"><i class="entypo-rss"></i></div>
                        <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

                        <h3>Subscribers</h3>
                        <p>on our site right now.</p>
                    </div>

                </div>
            </div>

            <br />


            <br />

            <div class="row">

                <div class="col-sm-4">

                    <div class="panel panel-primary">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th class="padding-bottom-none text-center">
                                        <br />
                                        <br />
                                        <span class="monthly-sales"></span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="panel-heading">
                                        <h4>Monthly Sales</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="col-sm-8">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">Latest Updated Profiles</div>

                            <div class="panel-options">
                                <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                                <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                            </div>
                        </div>

                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Activity</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Art Ramadani</td>
                                    <td>CEO</td>
                                    <td class="text-center"><span class="inlinebar">4,3,5,4,5,6</span></td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Filan Fisteku</td>
                                    <td>Member</td>
                                    <td class="text-center"><span class="inlinebar-2">1,3,4,5,3,5</span></td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Arlind Nushi</td>
                                    <td>Co-founder</td>
                                    <td class="text-center"><span class="inlinebar-3">5,3,2,5,4,5</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

            <br />

            <!-- Footer -->
            <footer class="main">


                &copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

            </footer>
        </div>



        <link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
        <link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

        <!-- Bottom Scripts -->
        <script src="assets/js/gsap/main-gsap.js"></script>
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/joinable.js"></script>
        <script src="assets/js/resizeable.js"></script>
        <script src="assets/js/neon-api.js"></script>
        <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
        <script src="assets/js/jquery.sparkline.min.js"></script>
        <script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
        <script src="assets/js/rickshaw/rickshaw.min.js"></script>
        <script src="assets/js/raphael-min.js"></script>
        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/toastr.js"></script>
        <script src="assets/js/neon-chat.js"></script>
        <script src="assets/js/neon-custom.js"></script>
        <script src="assets/js/neon-demo.js"></script>

</body>

</html>