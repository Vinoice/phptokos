<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Toko</title>
  </head>
  <body>
 
  <div class="container">
  <div class="row">
      <h1>Toko Wayang Kami</h1>
      </div>
      <div class="row">
      <h6>Program Aplikasi sederhana untuk menghitung penjualan barang Toko Wayng Kami</h6>
      </div>
      <div class="row pt-3">
  </div>
  <div class="container">
      <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
    <label for="NamaBarang">Nama Barang</label>
    <select class="form-control" name="nama" id="exampleFormControlSelect1">
      <option>MousePad</option>
      <option>Monitor</option>
      <option>Keyboard</option>
      <option>Mouse</option>
      <option>PC</option>
    </select>
  </div>
  <div class="form-group">
    <label for="HargaBarang">Harga Barang</label>
    <input type="text" class="form-control" name="harga" id="exampleFormControlTextarea1" rows="1">
  </div>
  <div class="form-group">
    <label for="JumlahBarang">Jumlah Barang</label>
    <select class="form-control" name="jumlah" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="submit" name= "hitung" class="btn btn-primary">Hitung</button>
</form>

      </div>
  </div>
<hr>
  <?php
    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $total = $harga * $jumlah;
        $d = 0.05 * $total;
        $h = $total - $d ;

        echo " <div class='container'>";
        echo "<h3>Jumlah yang harus di bayar</h3>";
        echo "<h6>Nama Barang : $nama</h6>";
        echo "<h6>Harga Barang : $harga</h6>";
        echo "<h6>Jumlah Barang : $jumlah</h6>";
        echo "<h6>Diskon : 5%</h6>";
        echo "<h3>TOTAL : Rp " . number_format( $h, 2). "";
        echo "</div>";
    }
  ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

