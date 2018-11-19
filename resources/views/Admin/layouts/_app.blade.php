<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('public/css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('public/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('public/css/morris.css')}}" rel="stylesheet">



    <!-- Custom Fonts -->

    <!-- MY STYLE -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/styleAdmin.css') }}">

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" class="container-fluid ">

    @yield('content')
    
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{URL::asset('public/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('public/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('public/js/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{URL::asset('public/js/raphael.min.js')}}"></script>
    <script src="{{URL::asset('public/js/morris.min.js')}}"></script>
    <script src="{{URL::asset('public/js/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('public/js/sb-admin-2.js')}}"></script>



</body>

</html>
