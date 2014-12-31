
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title><?php echo $title ?></title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
      <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link href="<?php echo base_url();?>css/bootplus.css" rel="stylesheet">
       
       <link href="<?php echo base_url();?>css/gbu.css" rel="stylesheet">
      <style type="text/css">
      body {
        padding-top: 35px;
        padding-bottom: 0px;
      }
       
      </style>
      <link href="<?php echo base_url();?>css/bootplus-responsive.css" rel="stylesheet">

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>js/html5shiv.js"></script>
      <![endif]-->
       <script src="<?php echo base_url();?>jd/bootstrap-dropdown.css"></script>
      <!--Load JQUERY from Google's network -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script> 
    // using JQUERY's ready method to know when all dom elements are rendered
    $( document ).ready(function () {
      // set an on click on the button
      $(".button").click(function () {
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get($(this).attr('id'), function (time) {
          // update the textarea with the time
          $("#mycontent").html(time);
        });
      });
    });
  </script>
  

  
      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url();?>ico/favicon.png">
  </head>
  <body>
      
  