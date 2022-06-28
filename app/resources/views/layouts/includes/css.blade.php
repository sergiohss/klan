<!-- Pignose Calender -->
<link href="{{asset('./plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
<!-- Chartist -->
<link rel="stylesheet" href="{{asset('./plugins/chartist/css/chartist.min.css')}}">
<link rel="stylesheet" href="{{asset('./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">

<!-- Custom Stylesheet -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">


<link href="{{asset('icons/font-awesome/css/font-awesome.min.css)}}" rel="stylesheet">
<link href="{{asset('icons/simple-line-icons/css/simple-line-icons.css)}}" rel="stylesheet">
<link href="{{asset('icons/weather-icons/css/weather-icons.min.css)}}" rel="stylesheet">
<link href="{{asset('icons/cryptocoins/css/cryptocoins.css)}}" rel="stylesheet">
<link href="{{asset('icons/cryptocoins/css/cryptocoins-colors.css)}}" rel="stylesheet">
<link href="{{asset('icons/linea-icons/linea.css)}}" rel="stylesheet">
<link href="{{asset('icons/ionicons/css/ionicons.css)}}" rel="stylesheet">
<link href="{{asset('icons/themify-icons/themify-icons.css)}}" rel="stylesheet">
<link href="{{asset('icons/flag-icon-css/flag-icon.min.css))}}" rel="stylesheet">
<link href="{{asset('icons/material-design-iconic-font/materialdesignicons.min.css)}}" rel="stylesheet">
<link href="{{asset('icons/pe-icon-set-weather/css/pe-icon-set-weather.min.css)}}" rel="stylesheet">
<link href="{{asset('plugins/animate/animate.min.css)}}" rel="stylesheet">
<link href="{{asset('plugins/metismenu/css/metisMenu.min.css)}}" rel="stylesheet">
<link href="{{asset('plugins/bootstrap-select/dist/css/bootstrap-select.min.css)}}" rel="stylesheet">



@yield('mycssfile')

@yield('styles')

@stack('style_stack')
