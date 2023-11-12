<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Cetak Pemesanan Nasi Goreng Priaidaman</title>
  <style>
    /* CSS untuk mengatur tampilan */
    section {
      text-align: center;
      border-top: 1px solid #ccc;
      padding: 20px;
    }

    header {
      color: black;
      background-color: seagreen;
      padding: 20px;
    }

    header hgroup {
      float: left;
      color: #fff;
    }

    header nav {
      float: right;
      margin-top: 50px;
    }

    body {
      background-color: darkgreen;
    }

    h2 {
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
    }

    .struk {
      border: 1px solid white;
      padding: 10px;
      margin: 20px auto;
      width: 50%;
    }

    .garis {
      border-bottom: 1px solid #000;
    }

    input[type="reset"] {
      background-color: red;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    footer {
      background-color: seagreen;
    }
  </style>
</head>

<body>

  <section>
    <h1>Halaman Cetak Pemesanan Nasi Goreng Priaidaman</h1>
    <h2>Data Pemesanan Nasi Goreng</h2>
    <div class="struk">
      <p>Data Pemesanan:</p>
      <div class="garis"></div>
      <?php
      if (isset($nama) && isset($menu) && isset($jumlah_pesanan) && isset($harga_menu) && isset($harga_total)) {
        echo "<p><strong>Nama Pelanggan:</strong> $nama</p>";
        echo "<p><strong>Jumlah Pesanan:</strong> $jumlah_pesanan</p>";
        echo "<p><strong>Menu Nasi Goreng yang Dipilih:</strong> $menu</p>";
        echo "<p><strong>Harga Nasi Goreng yang Dipilih:</strong> Rp $harga_menu</p>";
        echo "<p><strong>Harga Total:</strong> Rp $harga_total</p>";
      }
      ?>
      <a href="<?php echo base_url() . 'index.php/nasgor/pemesanan' ?>"> <input type="reset" value="Kembali"></a>
    </div>
  </section>
</body>

</html>