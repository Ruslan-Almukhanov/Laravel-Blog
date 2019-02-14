<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Pet Salon {{ isset($title) ? "| $title" : '' }}</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="/ss/dashboard.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
    <script src="/js/vendor/html5shiv.min.js"></script>
    <script src="/js/vendor/respond.min.js"></script>
    <script src="/js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body class="admin">
@section('content')
@show


<!-- template init -->
<script src="/js/compressed.js"></script>
<script src="/js/main.js"></script>

<!-- dashboard libs -->

<!-- events calendar -->
<script src="/js/admin/moment.min.js"></script>
<script src="/js/admin/fullcalendar.min.js"></script>
<!-- range picker -->
<script src="/js/admin/daterangepicker.js"></script>

<!-- charts -->
<script src="/js/admin/Chart.bundle.min.js"></script>
<!-- vector map -->
<script src="/js/admin/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/js/admin/jquery-jvectormap-world-mill.js"></script>
<!-- small charts -->
<script src="/js/admin/jquery.sparkline.min.js"></script>

<!-- dashboard init -->
<script src="/js/admin.js"></script>

</body>

</html>