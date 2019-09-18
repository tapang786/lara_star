<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index,follow">

        <title>{{$site_setting->site_title}}</title>
        <!--  -->
        <link href="{{url('frontend')}}/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{url('frontend')}}/css/animate.css" rel="stylesheet">
        <link href="{{url('frontend')}}/css/bootsnav.css" rel="stylesheet">
        <link href="{{url('frontend')}}/css/bootstrap.css" rel="stylesheet">
        <link href="{{url('frontend')}}/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="{{url('frontend')}}/css/swipebox.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
    </head>
    <body>

        @include('frontend.header')

        @yield('content')

        @include('frontend.footer')
    </body>
<script type="text/javascript" src="{{url('frontend')}}/js/jquery.min.js"></script>
<script src="{{url('frontend')}}/js/bootstrap.js"></script>
<script src="{{url('frontend')}}/js/bootsnav.js"></script>
<script src="{{url('frontend')}}/js/banner.js"></script>  
<script src="{{url('frontend')}}/js/jquery.swipebox.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {

            /* Basic Gallery */
            $( '.swipebox' ).swipebox();
            
            /* Video */
            $( '.swipebox-video' ).swipebox();

            /* Dynamic Gallery */
            $( '#gallery' ).click( function( e ) {
                e.preventDefault();
                $.swipebox( [
                    { href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
                    { href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
                ] );
            } );

      });
</script>
<script src="{{url('frontend')}}/js/script.js"></script>
</html>