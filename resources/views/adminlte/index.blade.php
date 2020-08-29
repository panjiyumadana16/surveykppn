@if(!Session::get('u_login'))
    <script>window.location = "/notlogin";</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Survey KPPN-Kediri | Admin Page</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-info bg-light btn btn-flat" data-toggle="dropdown" href="#">
          <i class="far fa-user"> Admin Profile</i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('dist/img/avatar5.png') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title text-bold">
                  Admin
                </h3>
                <p class="text-sm">Selamat Datang! <br>
                Admin Aplikasi KPPN Kediri</p>
              </div>
            </div>
            <!-- Message End -->
            <div>
              <a href="{{ url('/logout') }}">
                <button class="btn btn-block btn-flat btn-danger text-center">
                    Logout
                </button>
              </a>
            </div>
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link bg-white">
      <img src="{{ url('dist/img/Logo.png') }}" alt="KPPN Logo" class="brand-image img-rounded"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Survey KPPN-Kediri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/survey" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Survey
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pantaujawaban" class="nav-link">
              <i class="far fa-eye nav-icon"></i>
                <p>Pantau Jawaban Survey</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @yield('konten')
  

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ url('dist/js/demo.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ url('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ url('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ url('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ url('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ url('dist/js/pages/dashboard2.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ url('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ url('plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script type="text/javascript">
// Highlight menu
  $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".sidebar a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
                //for making parent of submenu active
               $(this).closest("a").parent().parent().addClass("active");
            }
        });
    });
// End Highlight menu

// Toast
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').show(function() {
      Toast.fire({
        icon: 'success',
        title: '{{Session::get('alert')}}'
      })
    });
    $('.swalDefaultInfo').show(function() {
      Toast.fire({
        icon: 'info',
        title: '{{Session::get('alert')}}'
      })
    });
    $('.swalDefaultError').show(function() {
      Toast.fire({
        icon: 'error',
        title: '{{Session::get('alert')}}'
      })
    });
    $('.swalDefaultWarning').show(function() {
      Toast.fire({
        icon: 'warning',
        title: '{{Session::get('alert')}}'
      })
    });
    $('.swalDefaultQuestion').show(function() {
      Toast.fire({
        icon: 'question',
        title: '{{Session::get('alert')}}'
      })
    });
  });
// End Toast
  
// Data Table
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "colReorder" : true,

    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
// End Data Table

// Validate Form
  $(document).ready(function () {

// Validate Form Survey
  $('#formsurvey').validate({
    rules: {
      judul: {
        required: true,
      },
    },
    messages: {
      judul: {
        required: "Judul masih kosong",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
//End Validate Form Survey


});
</script>
@yield('footer')
</body>
</html>
