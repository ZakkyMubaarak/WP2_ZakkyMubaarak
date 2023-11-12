<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="http://localhost/pustaka-booking/assets/css/stylenasgor.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <meta charset="utf-8">
  <title>Web Prog II | Merancang Template sederhana dengan
    codeigniter</title>
</head>

<body>
  <div id="wrapper">
    <header>
      <hgroup>
        <h1>Nasi Goreng <span>Priaidaman</span></h1>
        <h3>Top 1 Global Nasi Goreng Special </h3>
      </hgroup>
      <nav>
        <ul>
          <li><a href="<?php echo base_url() . 'index.php/nasgor' ?>"> <span class="nav-icon fa fa-home"></span>Beranda</a></li>
          <li><a href="<?php echo base_url() . 'index.php/nasgor/pemesanan' ?>"> <span class="nav-icon fa fa-cart-plus"></span>Pemesanan</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>