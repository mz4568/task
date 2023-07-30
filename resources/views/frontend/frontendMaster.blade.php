<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>MHK Shop</title>
    <!-- Standard Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Base Google Font for Web-app -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
    <!-- Ion-Icons 4 -->
    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bundle.css')}}">
    <link rel='stylesheet' href="{{asset('frontend/css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">

    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

</head>

<body>

<!-- app -->
<div id="app">
   

    <!-- Men-Clothing -->
    @yield('allSection')
   
</div>


<!-- Bootstrap JS -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('frontend/js/sweetalert2.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Main -->
<script type="text/javascript" src="{{asset('frontend/js/app.js')}}"></script>
<!-- <script src="{{asset('frontend/js/custom.js')}}"></script> -->
<script src="{{asset('assets/js/toastr.min.js')}}"></script>

    <script>
            
     // use toastr

       @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif

     $('#datepicker').datepicker({
      uiLibrary: 'bootstrap5'
     });
    </script>

</body>
</html>

