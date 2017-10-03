<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <title>Gadget Verify</title>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/theme.css" rel="stylesheet">
    <link href="../../css/ui.css" rel="stylesheet">    
    <script src="../../plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- BEGIN PAGE STYLE -->
    <link href="../../plugins/charts-morris/morris.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script type="text/javascript">
          window.cookieconsent_options = { "message": "Cookies help us to deliver our services. By using our services you agree to our use of cookies.", "dismiss": "Okay", "learnMore": "More info", "link": "/info/cookies/", "theme": "dark-bottom" };
        </script>
  </head>

  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default mailbox">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar sidebar-mailbox">
        <div class="logopanel">
          <h1>
            <a href="dashboard.html">Gadget verify</a>
          </h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">   
            <a href="#modal-responsive" class="btn btn-primary btn-compose" data-toggle="modal" data-target="#modal-responsive" >Search</a>
          </div>
          <ul class="nav nav-sidebar">
            <li class="tm"><a href="{{ url('/home') }}"><i class="icon-home"></i>Home</a></li>
            <li class="tm"><a href="{{ url('/device') }}"><span class="badge-rounded pull-right">4</span><i class="icons-education-science-09"></i><span data-translate="portlets">Devices</span></a></li>
            <li class="tm"><a href="{{ url('/report') }}"><i class="icons-badges-votes-14"></i><span data-translate="portlets">Reports</span></a></li>            
          </ul>
          
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-original-title="Settings">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
              
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">              
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">                
                <span class="username">Hi, User </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                  </li>                  
                  <li>
                    <a href="#"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->              
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <div class="page-content">
          <div class="header">
            









<div class="row m-t-10">
            <div class="col-xlg-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="panel">
                <div class="panel-content widget-info">
                  <div class="row">
                    <div class="left">
                      <i class="icons-education-science-09 bg-green"></i>
                    </div>
                    <div class="right">
                      <p class="number countup" data-from="0" data-to="52000"><!-- if (count($collection) > 0)
                       $collection  
                      endif --></p>
                      <p class="text">Devices</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xlg-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="panel">
                <div class="panel-content widget-info">
                  <div class="row">
                    <div class="left">
                      <i class="icons-badges-votes-14 bg-blue"></i>
                    </div>
                    <div class="right">
                      <p class="number countup" data-from="0" data-to="575" data-suffix="k">0</p>
                      <p class="text">Reports</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <div class="col-xlg-2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="panel">
                <div class="panel-content widget-info">
                  <div class="row">
                    <div class="left">
                      <i class="fa fa-bug bg-purple"></i>
                    </div>
                    <div class="right">
                      <p class="number countup" data-from="0" data-to="1210">0</p>
                      <p class="text">Updates</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    @yield('content')

        <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2017 </span>
                <span>Gadget Verify</span>.
                <span>All rights reserved. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
              </p>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
    
          <div class="modal fade" id="modal-responsive" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icons-office-52"></i></button>                  
                </div>
                <div class="modal-body">
                  
                  
                      <div class="form-group">
                        <center><label for="field-2" class="control-label">Devices</label></center>
                        <input type="text" class="form-control" id="field-2" placeholder="Search for devices...">
                      </div>
                    
                  
                <div class="modal-footer text-center">
                  <button type="button" class="btn btn-info btn-embossed bnt-square" data-dismiss="modal"><i class="fa fa-search"></i> Search</button>
                </div>
              </div>
            </div>
          </div>

    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
     <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
    <script src="../../plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="../../plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="../../plugins/gsap/main-gsap.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="../../plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="../../plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
    <script src="../../plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="../../plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="../../plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="../../plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="../../plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="../../plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="../../plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="../../plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="../../plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="../../plugins/charts-chartjs/Chart.min.js"></script>
    <script src="../../js/builder.js"></script> <!-- Theme Builder -->
    <script src="../../js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="../../js/application.js"></script> <!-- Main Application Script -->
    <script src="../../js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="../../js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="../../js/quickview.js"></script> <!-- Chat Script -->
    <script src="../../js/pages/search.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="../../plugins/summernote/summernote.min.js"></script> <!-- Simple HTML Editor -->
    <script src="../../plugins/quicksearch/quicksearch.min.js"></script> <!-- Search Filter -->
    <script src="../../plugins/charts-morris/raphael.min.js"></script> <!-- Morris Charts -->
    <script src="../../plugins/charts-morris/morris.min.js"></script> <!-- Morris Charts -->
    <script src="../../js/pages/mailbox.js"></script>
    <!-- END PAGE SCRIPTS -->      
  </body>
</html>
