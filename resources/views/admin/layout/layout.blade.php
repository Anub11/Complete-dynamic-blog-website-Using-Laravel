<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <title>{{config('constants.site_name')}} |</title> -->
  <title>@yield('title') |</title>

  <!-- Bootstrap -->
  <link href="{{ asset ('admin_assects/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset ('admin_assects/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset ('admin_assects/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset ('admin_assects/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="{{ asset ('admin_assects/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
  <!-- Select2 -->
  <link href="{{ asset ('admin_assects/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <!-- Switchery -->
  <link href="{{ asset ('admin_assects/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
  <!-- starrr -->
  <link href="{{ asset ('admin_assects/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="{{ asset ('admin_assects/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset ('admin_assects/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="{{ url('/admin/post/list')}}"><i class="fa fa-home"></i> post</a></li>
                <li><a href="{{ url('/admin/page/list')}}"><i class="fa fa-home"></i> Pages</a></li>
                <li><a href="{{ url('/admin/contact/list')}}"><i class="fa fa-home"></i> Contact Us</a></li>
            
              </ul>
            </div>
            

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  Welcome {{session('BLOG_USER_NAME')}}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  
                  <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
          @yield('content') 
  
       </div>
      <!-- /page content -->

      <!-- footer content -->
      
      <!-- /footer content -->
  

  <!-- jQuery -->
  <script src="{{ asset ('admin_assects/vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset ('admin_assects/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset ('admin_assects/vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- NProgress -->
  <script src="{{ asset ('admin_assects/vendors/nprogress/nprogress.js') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{ asset ('admin_assects/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset ('admin_assects/vendors/iCheck/icheck.min.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ asset ('admin_assects/vendors/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset ('admin_assects/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <!-- bootstrap-wysiwyg -->
  <script src="{{ asset ('admin_assects/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
  <script src="{{ asset ('admin_assects/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
  <script src="{{ asset ('admin_assects/vendors/google-code-prettify/src/prettify.js') }}"></script>
  <!-- jQuery Tags Input -->
  <script src="{{ asset ('admin_assects/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
  <!-- Switchery -->
  <script src="{{ asset ('admin_assects/vendors/switchery/dist/switchery.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset ('admin_assects/vendors/select2/dist/js/select2.full.min.js') }}"></script>
  <!-- Parsley -->
  <script src="{{ asset ('admin_assects/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
  <!-- Autosize -->
  <script src="{{ asset ('admin_assects/vendors/autosize/dist/autosize.min.js') }}"></script>
  <!-- jQuery autocomplete -->
  <script src="{{ asset ('admin_assects/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
  <!-- starrr -->
  <script src="{{ asset ('admin_assects/vendors/starrr/dist/starrr.js') }}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ asset ('admin_assects/build/js/custom.min.js') }}"></script>

</body></html>
