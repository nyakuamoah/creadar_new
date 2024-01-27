<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="description" content="Dedicated to satisfying consumers with effective Cleaning Products/Services and premium-quality Organic Body Care Products.">
    <meta name="keywords" content="organic skin care, natural skin products, organic hair care, organic body oils, liquid soap, floor cleaners, bleach, commercial cleaning, residential cleaning,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Open Graph Tags-->
    <meta property="og:url" content="http://tanpog.creadar.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Tanpog - Cleaning & Body Care Products" />
    <meta property="og:description" content="Dedicated to satisfying consumers with effective Cleaning Products/Services and premium-quality Organic Body Care Products." />
    <meta property="og:image" content="http://www.creadar.com/tanpog/img_tanpog/tanpog_banner.jpg" />

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@tanpog"/>
    <meta name="twitter:domain" content="Tanpog"/>
    <meta name="twitter:creator" content="@tanpog"/>
    <meta name="twitter:image:src" content="http://www.creadar.com/tanpog/img_tanpog/tanpog_banner.jpg"/>

    <title><?php 
    if ($activePage!=="index"){
      echo "Tanpog Ventures - ". ucfirst($activePage);
    } else {
      $activePage = "Tanpog Ventures";
      echo $activePage;
    }
    ?>
    </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">

    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/stylesheet.css" rel="stylesheet">
    <link href="css_tanpog/tanpog.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="top" class="content-height">

    <div id="app"></div>

    <div id="initial_startup">
      <svg class="spinner-container" width="50" height="50" viewBox="0 0 44 44"><circle class="path" cx="22" cy="22" r="20" fill="none" stroke-width="1"></circle></svg>
      <div class="progress-container"></div>
    </div>

    <script language="javascript" type="text/javascript">
         $(window).load(function() {
         $('#app, #initial_startup').hide();
         $('#top').addClass("animated fadeIn");
      });
    </script>
