<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="description" content="An initiative creating value for organizations and entrepreneurs through the perspective use of design in business incubation, services and support.">
    <meta name="keywords" content="design-led incubator, design consultants, customer-centered design, design skill training, ghanaian business incubator, ghanaian design intiatives, design awareness, value of design, people-focused design, package design, interaction">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Open Graph Tags-->
    <meta property="og:url" content="http://www.creadar.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Design Meets Business Performance" />
    <meta property="og:description" content="Guiding African entrepreneurs and startups to create lasting innovations through the integration of design in business as style, process development and strategy." />
    <meta property="og:image" content="http://www.creadar.com/img/support_training.jpg" />

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@creadar"/>
    <meta name="twitter:domain" content="Creadar"/>
    <meta name="twitter:creator" content="@creadar"/>
    <meta name="twitter:image:src" content="http://www.creadar.com/img/support_training.jpg"/>

    <title><?php 
    if ($activePage!=="index"){
      echo "Creadar - ". ucfirst($activePage);
    } else {
      $activePage = "Creadar";
      echo $activePage;
    }
    ?>
    </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="top">

    <div id="app"></div>

    <div id="initial_startup">
      <svg class="spinner-container" width="50" height="50" viewBox="0 0 44 44"><circle class="path" cx="22" cy="22" r="20" fill="none" stroke-width="2"></circle></svg>
      <div class="progress-container"></div>
    </div>

    <script language="javascript" type="text/javascript">
         $(window).load(function() {
         $('#app, #initial_startup').hide();
         $('#top').addClass("animated fadeIn");
      });
    </script>
