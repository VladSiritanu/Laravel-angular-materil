<!doctype html>
<html ng-app="app" ng-strict-di>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <title>Laravel Angular Material Starter</title>

    <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
        <link type="text/css" rel="stylesheet" href="../../assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->

    <!--[if lte IE 10]>
    <script type="text/javascript">document.location.href = '/unsupported-browser'</script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

    <div ui-view="header"></div>
    <div ui-view="main"></div>
    <div ui-view="footer"></div>

    <script src="{!! asset('js/vendor.js') !!}"></script>
    <script src="{!! asset('js/partials.js') !!}"></script>
    <script src="{!! asset('js/app.js') !!}"></script>

    <!-- BEGIN JAVASCRIPT -->
    <script src="../../assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="../../assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../assets/js/libs/bootstrap/bootstrap.min.js"></script>
    <script src="../../assets/js/libs/spin.js/spin.min.js"></script>
    <script src="../../assets/js/libs/autosize/jquery.autosize.min.js"></script>
    <script src="../../assets/js/libs/moment/moment.min.js"></script>
    <script src="../../assets/js/libs/flot/jquery.flot.min.js"></script>
    <script src="../../assets/js/libs/flot/jquery.flot.time.min.js"></script>
    <script src="../../assets/js/libs/flot/jquery.flot.resize.min.js"></script>
    <script src="../../assets/js/libs/flot/jquery.flot.orderBars.js"></script>
    <script src="../../assets/js/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/js/libs/flot/curvedLines.js"></script>
    <script src="../../assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="../../assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
    <script src="../../assets/js/libs/d3/d3.min.js"></script>
    <script src="../../assets/js/libs/d3/d3.v3.js"></script>
    <script src="../../assets/js/libs/rickshaw/rickshaw.min.js"></script>
    <script src="../../assets/js/core/source/App.js"></script>
    <script src="../../assets/js/core/source/AppNavigation.js"></script>
    <script src="../../assets/js/core/source/AppOffcanvas.js"></script>
    <script src="../../assets/js/core/source/AppCard.js"></script>
    <script src="../../assets/js/core/source/AppForm.js"></script>
    <script src="../../assets/js/core/source/AppNavSearch.js"></script>
    <script src="../../assets/js/core/source/AppVendor.js"></script>
    <script src="../../assets/js/core/demo/Demo.js"></script>
    <script src="../../assets/js/core/demo/DemoDashboard.js"></script>
    <!-- END JAVASCRIPT -->


    {{--livereload--}}
    @if ( env('APP_ENV') === 'local' )
    <script type="text/javascript">
        document.write('<script src="'+ location.protocol + '//' + (location.host.split(':')[0] || 'localhost') +':35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
    </script>
    @endif
</body>
</html>
