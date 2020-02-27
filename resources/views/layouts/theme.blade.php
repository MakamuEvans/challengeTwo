<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/turbo/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="http://www.urbanui.com/turbo/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kogalo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/turbo.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="{{asset('assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

</head>

<body>
<div class="wrapper">
    @include('layouts._includes._sidebar')
    <div class="main-panel">
        @include('layouts._includes._header')
        @yield('content')
        @include('layouts._includes._footer')
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/vendors/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('assets/vendors/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('assets/vendors/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('assets/vendors/charts/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/vendors/charts/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/vendors/charts/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/vendors/charts/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/vendors/charts/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/vendors/charts/chartjs/Chart.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{asset('assets/vendors/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/vendors/bootstrap-notify.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('assets/vendors/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('assets/vendors/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('assets/vendors/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAurmSUEQDwY86-wOG3kCp855tCI8lHL-I"></script>
<!-- Select Plugin -->
<script src="{{asset('assets/vendors/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('assets/vendors/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('assets/vendors/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/vendors/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('assets/vendors/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('assets/vendors/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/turbo.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

<script src="{{asset('assets/js/charts/flot-charts.js')}}"></script>
<script src="{{asset('assets/js/charts/chartjs-charts.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initVectorMap();
    });
</script>

</html>
