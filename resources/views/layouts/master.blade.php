<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dukataze</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
 @yield('style')
    <style>
        .dash-nav.dash-nav-dark {
            background-color: #01042d;
        }
        .bg-grey-900 {
            background-color: #01042d !important;
        }
    </style>

</head>
<body>
    @yield('content')
    <script src="{{asset('js/all.js')}}"></script>
     @yield('javascript')
</body>
</html>   
