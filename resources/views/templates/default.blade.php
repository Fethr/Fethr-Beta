<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Info -->
    <title>Fethr - Social Network for Web Developers &amp; Designers</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Barry-Alan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/default/img/placeholders/favicon.png">
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300,100|Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <!-- Core Stylesheets 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">-->
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/css/default.css')}}"/>    
    
</head>
    
<body>
    
@yield ('content')
@include('templates.partials.nav')
    
    <!-- JavaScript
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scripts.js"></script>
    -->
    
</body>
</html>