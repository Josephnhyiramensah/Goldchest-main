<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel = "icon" href ="/img/goldchest_2.png" type ="image/x-icon">

  <title>Goldchest</title>
  <!-- Custom fonts for this template-->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/css/googleapis.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrapcdn_bootstrap.min.css">
  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
<?php
  if(isset($_SESSION['vat_type'])){$vat_type = $_SESSION['vat_type'];}else{$vat_type = '';};
  if(isset($_SESSION['vat_calc_type'])){$vat_calc_type = $_SESSION['vat_calc_type'];}else{$vat_calc_type = '';};
  if(isset($_SESSION['covid_perc'])){$covid_perc = $_SESSION['covid_perc'];}else{$covid_perc = '';};
  if(isset($_SESSION['nhil_perc'])){$nhil_perc = $_SESSION['nhil_perc'];}else{$nhil_perc = '';};
  if(isset($_SESSION['getfund_perc'])){$getfund_perc = $_SESSION['getfund_perc'];}else{$getfund_perc = '';};
  if(isset($_SESSION['vat_perc'])){$vat_perc = $_SESSION['vat_perc'];}else{$vat_perc = '';};
?>
<input type='hidden' id='session_vat_type' value="<?php echo $vat_type;?>">
<input type='hidden' id='session_vat_calc_type' value="<?php echo $vat_calc_type;?>">
<input type='hidden' id='session_covid_perc' value="<?php echo $covid_perc;?>">
<input type='hidden' id='session_nhil_perc' value="<?php echo $nhil_perc;?>">
<input type='hidden' id='session_getfund_perc' value="<?php echo $getfund_perc;?>">
<input type='hidden' id='session_vat_perc' value="<?php echo $vat_perc;?>">

  <!-- Page Wrapper -->
  <div id="wrapper">