<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Girnar Care | @if(isset($title)){{$title}} @else @endif</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset("/AdminLTE-2.3.11/bootstrap/css/bootstrap.min.css") }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset("/AdminLTE-2.3.11/dist/css/AdminLTE.min.css") }}">
  <link rel="stylesheet" href="{{ asset("/AdminLTE-2.3.11/dist/css/skins/skin-blue.min.css") }}">
  <link href="{{ asset('/AdminLTE-2.3.11/plugins/datatables/jquery.dataTables.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Girnar</b>Careline</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset("/AdminLTE-2.3.11/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <!-- <img src="{{ asset("/AdminLTE-2.3.11/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image"> -->

               <!--  <p>
                  {{Auth::user()->name}} - Web Developer
                  <small>Member since Nov. 2012</small>
                </p> -->
              </li>
              <!-- Menu Body -->
             <!--  <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{PREFIX}}admin/user/edit/{{Auth::user()->id}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/AdminLTE-2.3.11/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
         <li class="@if(isset($class) && $class=='user') active @endif"><a href="{{PREFIX}}admin/user/list"><i class="fa fa-user"></i> <span>Manage Users</span></a></li>
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  @yield('content')


  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Girnar Carelines</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset("/AdminLTE-2.3.11/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("/AdminLTE-2.3.11/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/AdminLTE-2.3.11/dist/js/app.min.js") }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.4.5/standard/ckeditor.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
  $('#usertable').on('click','.status', function(){
    
    var id = $(this).attr('id');
    var val = $(this).data('value');
    $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/user/userstatus",
      data: {'id':id,'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        if(data == 'active'){
          $("#"+id).removeClass('btn-danger');
          $("#"+id).addClass('btn-success');
          $("#"+id).text('Active');
          $("#"+id).data('value','active');
        }
        else
        {
          $("#"+id).removeClass('btn-success');
          $("#"+id).addClass('btn-danger');
          $("#"+id).text('Inactive');
          $("#"+id).data('value','pending');
        }

      }
    });

});


$('#blogcommenttable').on('click','.status', function(){
    
    var id = $(this).attr('id');
    var val = $(this).data('value');
    $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/blogcomment/commentstatus",
      data: {'id':id,'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        if(data == 'active'){
          $("#"+id).removeClass('btn-danger');
          $("#"+id).addClass('btn-success');
          $("#"+id).text('Active');
          $("#"+id).data('value','active');
        }
        else
        {
          $("#"+id).removeClass('btn-success');
          $("#"+id).addClass('btn-danger');
          $("#"+id).text('Inactive');
          $("#"+id).data('value','pending');
        }

      }
    });

});

$('#blogcommenttable').on('click','.delete', function(){

  var val = $(this).data('value');
  swal({
  title: "Are you sure?",
  text: "You will not be able to recover this  comment!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plz!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
     $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/blogcomment/delete",
      data: {'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        swal("Deleted!", " Comment has been deleted.", "success");
        $("#delete_"+val).closest('tr').remove();

      }
    });
    
    } else {
      swal("Cancelled", "Your Comment  is safe :)", "error");
    }
 });
});


$('#blogtable').on('click','.delete', function(){

  var val = $(this).data('value');
  swal({
  title: "Are you sure?",
  text: "You will not be able to recover this  Blog!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plz!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
     $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/blog/delete",
      data: {'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        swal("Deleted!", " Blog has been deleted.", "success");
        $("#delete_"+val).closest('tr').remove();

      }
    });
    
    } else {
      swal("Cancelled", "Your Blog  is safe :)", "error");
    }
 });
});


$('#testitable').on('click','.delete', function(){

  var val = $(this).data('value');
  swal({
  title: "Are you sure?",
  text: "You will not be able to recover this  testimonial!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plz!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
     $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/testimonial/delete",
      data: {'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        swal("Deleted!", " testimonial has been deleted.", "success");
        $("#delete_"+val).closest('tr').remove();

      }
    });
    
    } else {
      swal("Cancelled", "Your testimonial  is safe :)", "error");
    }
 });
});


$('#usertable').on('click','.delete', function(){

  var val = $(this).data('value');
  swal({
  title: "Are you sure?",
  text: "You will not be able to recover this  user!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plz!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
     $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/user/delete",
      data: {'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        swal("Deleted!", " User has been deleted.", "success");
        $("#delete_"+val).closest('tr').remove();

      }
    });
    
    } else {
      swal("Cancelled", "Your User  is safe :)", "error");
    }
 });
});



$('#blogcattable').on('click','.delete', function(){

  var val = $(this).data('value');
  swal({
  title: "Are you sure?",
  text: "You will not be able to recover this  Category!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plz!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
     $.ajax({
      type: 'POST',
      url: "{{PREFIX}}admin/blogcat/delete",
      data: {'val':val,'_token':'{{csrf_token()}}'},
      success: function(data) { 
        
        swal("Deleted!", " Category has been deleted.", "success");
        $("#delete_"+val).closest('tr').remove();

      }
    });
    
    } else {
      swal("Cancelled", "Your Category  is safe :)", "error");
    }
 });
});
</script>

<!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> -->
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<script type="text/javascript">

$(document).ready(function() {
    $('#usertable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin/user/getData') }}',
        columns: [
            {data: 'uname', name: 'uname'},
            {data: 'uemail', name: 'uemail'},
            {data: 'rname', name: 'rname',search:true},
            {data: 'status', name: 'status'},
             {data: 'action', name: 'action'},
        ]
    });
});

</script>

</body>
</html>
