<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon.png')}}">
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ asset('backend/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('backend/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>
<body class="hold-transition sidebar-mini">
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
  <!-- Navbar -->
  @include('layouts.blackand.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.blackand.sidebarmenu')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  {{--  @include('layouts.blackand.header')  --}}


    <!-- Main content -->
  <div class="page-wrapper">
    <div class="container-fluid">
      @yield('content')
      @include('sweetalert::alert')
      <!-- /.container-fluid -->
    </div>
  <footer class="footer text-center text-muted">
              All Rights Reserved by Freedash. Designed and Developed by <a
                  href="https://adminmart.com/">Adminmart</a>.
  </footer>
  </div>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

</div>

  <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('backend/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('backend/dist/js/feather.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('backend/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('backend/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('backend/assets/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{ asset('backend/assets/extra-libs/c3/c3.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('backend/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset('backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('backend/dist/js/pages/dashboards/dashboard1.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });


  })
</script>
<script>
  $(function () {
    // Summernote
    $('#summernote2').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });


  })
</script>

  <script>
    $(document).ready(function() {
        {{--  $('#pj2').hide();  --}}
        var conceptName = $('#sk').find(":selected").val();
        if (conceptName == 2) {
            $('#pj2').show();
        } else {
            $('#pj2').hide();
        }
    });

    $('#sk').on('change', function() {
        //ways to retrieve selected option and text outside handler
        console.log('Changed option value ' + this.value);
        console.log('Changed option text ' + $(this).find('option').filter(':selected').text());
        if (this.value == 2) {
            $('#pj2').show();
        } else {
            $('#pj2').hide();
        }
    });
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

    $("#example4").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');

    $("#example5").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');

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
</script>


</body>
</html>
