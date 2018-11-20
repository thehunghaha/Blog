<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('public/css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('public/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('public/css/morris.css')}}" rel="stylesheet">
    <!-- MY STYLE -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/styleAdmin.css') }}">

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    
    <!-- CDN  css category editor--> 
            <script src="{{ URL::asset('public/ckeditor/ckeditor.js') }}"></script>




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

    <!-- Adding category editor --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
</body>

</html>
