<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="Hargian">
<!--    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">-->
    <meta name="robots" content="index,follow">

    <title><?=$title ?></title>

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="/design/css/plugin.css">
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/design/css/style.css">
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader Start -->
<div class="preloader">
    <div class="rounder"></div>
</div>
<!-- Preloader End -->
<div id="main" >
<?php require ('views/'.$view.'.php');?>
</div>
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="/design/js/jquery.min.js"></script>
    <script type="text/javascript" src="/design/js/plugin.js"></script>
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="/design/js/scripts.js"></script>


</body>
</html>