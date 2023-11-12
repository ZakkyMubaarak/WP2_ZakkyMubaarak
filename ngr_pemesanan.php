<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pemesanan Nasi Goreng Priaidaman</title>
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

    .form-group {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 20px;
    }

    label {
      flex: 1;
      margin-right: 10px;
      text-align: right;
    }

    input[type="text"],
    input[type="number"] {
      flex: 5;
      width: 150%;
      padding: 5px;
    }

    select {
      flex: 5;
      width: 100%;
      padding: 5px;
    }

    input[type="submit"] {
      margin: 10px;
      background-color: #007bff;
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
    <h1>Halaman Pemesanan Nasi Goreng Sedap Malam</h1>
    <h2>Form Pemesanan Nasi Goreng</h2>
    <form action="<?php echo base_url('nasgor/simpan_pesanan'); ?>" method="POST">
      <div class="form-group">
        <label for="nama">Nama Pelanggan:</label>
        <input type="text" id="nama" name="nama" size="20" required>
      </div>

      <div class="form-group">
        <label for="menu">Menu yang Dipesan:</label>
        <select id="menu" name="menu" required>
          <option value="-" name="menu1" size="20" -</option>
          <option value="Nasi Goreng Steak" name="menu1">Nasi Goreng Steak</option>
          <option value="Nasi Goreng Gila" name="menu2">Nasi Goreng Gila</option>
          <option value="Nasi Goreng Mawut Special" name="menu3">Nasi Goreng Mawut Special</option>
          <option value="Nasi Goreng Ayam" name="menu4">Nasi Goreng Ayam</option>
        </select>
      </div>

      <div class="form-group">
        <label for="jumlah_pesanan">Jumlah yang Dipesan:</label>
        <input type="number" id="jumlah_pesanan" name="jumlah_pesanan" min="1" required>
      </div>

      <input type="submit" value="Pesan">

    </form>
  </section>
</body>

</html>