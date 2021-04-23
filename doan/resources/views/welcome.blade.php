<!DOCTYPE html>
<head>
    <!-- Page Title -->
    <title>Miracle | Responsive Multi-Purpose HTML5 Template</title>
    
    <link rel="shortcut icon" href="{{URL::to('public/images/favicon.png')}}" />

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Miracle | Responsive Multi-Purpose HTML5 Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.carousel.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.transitions.css')}}" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}"> 
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
    
    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/updates.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom.css')}}">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">
</head>
<body class="woocommerce">
    <div id="page-wrapper">
        @include("elements.top")
        <section id="content">
            <div class="container">
                <div class="row">
                    @include("elements.siderbar") 
                    @yield("content")
                </div>
            </div>
        </section>

        @include("elements.footer") 
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.noconflict.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/modernizr.2.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery-ui.1.11.2.min.js')}}"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script> 
    
    <!-- parallax -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="{{asset('public/frontend/js/waypoints.min.js')}}"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>

    <!-- plugins -->
    <script type="text/javascript" src="{{asset('public/frontend/js/jquery.plugins.js')}}"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="{{asset('public/frontend/js/main.js')}}"></script>
    <script type="text/javascript">
        sjq("#price-range-bar").slider({
            range: true,
            min: 0,
            max: 300,
            values: [ 100, 200 ],
            slide: function( event, ui ) {
                sjq(".min-price-label").html( "$" + ui.values[ 0 ]);
                sjq(".max-price-label").html( "$" + ui.values[ 1 ]);
            }
        });
        sjq(".min-price-label").html( "$" + sjq("#price-range-bar").slider( "values", 0 ));
        sjq(".max-price-label").html( "$" + sjq("#price-range-bar").slider( "values", 1 ));
    </script>
</body>
</html>