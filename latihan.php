<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Raport</title>
  </head>
  <body>
 
  <div class="container">
  <div class="row">
      <h1>Raport SMK</h1>
      </div>
  </div>
  <div class="container">
     <div class="row">
     <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
    <label for="Nilai">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" id="exampleFormControlTextarea1" rows="1">
  </div>
  <div class="form-group">
    <label for="Nilai">Kelas</label>
    <input type="text" class="form-control" name="kelas" id="exampleFormControlTextarea1" rows="1">
  </div>
      <div class="form-group">
    <label for="MataPelajaran">Nilai Produktif</label>
    <input class="form-control" name="np" id="exampleFormControlSelect1">
  </div>
  <div class="form-group">
    <label for="Nilai">Nilai Normatif</label>
    <input type="text" class="form-control" name="nn" id="exampleFormControlTextarea1" rows="1">
  </div>
  <div class="form-group">
    <label for="Nilai">Nilai Mulok</label>
    <input type="text" class="form-control" name="nm" id="exampleFormControlTextarea1" rows="1">
  </div>
  <button type="submit" name= "hitung" class="btn btn-primary">Hitung</button>
</form>

      </div>
     </div>
  </div>
<hr>
  <?php
    if (isset($_POST['hitung'])) {
        $np = $_POST['np'];
        $nn = $_POST['nn'];
        $nm = $_POST['nm'];
        $nama = $_POST ['nama'];
        $kelas = $_POST ['kelas'];
        $rata = ($np + $nn + $nm)/3;

        $nilai = $np;
        if ($nilai > 90) {
            $grade = "A";
        } elseif ($nilai > 80) {
            $grade = "B";
        } elseif ($nilai > 70) {
            $grade = "C";
        } elseif ($nilai > 60) {
            $grade = "D";
        } elseif ($nilai > 50) {
            $grade = "E";
        } elseif ($nilai < 50){
            $grade = "F";
        }
    
        if ($nilai > 70){
            $hasil = "LULUS";
        }else{
            $hasil = "TIDAK LULUS";
        }

        $nilai1 = $nn;
        if ($nilai1 > 90) {
            $grade1 = "A";
        } elseif ($nilai1 > 80) {
            $grade1 = "B";
        } elseif ($nilai1 > 70) {
            $grade1 = "C";
        } elseif ($nilai1 > 60) {
            $grade1 = "D";
        } elseif ($nilai1 > 50) {
            $grade1 = "E";
        } elseif ($nilai1 < 50){
            $grade1 = "F";
        }
    
        if ($nilai1 > 70){
            $hasil1 = "LULUS";
        }else{
            $hasil1 = "TIDAK LULUS";
        }
       
        $nilai2 = $nm;
        if ($nilai2 > 90) {
            $grade2 = "A";
        } elseif ($nilai2 > 80) {
            $grade2 = "B";
        } elseif ($nilai2 > 70) {
            $grade2 = "C";
        } elseif ($nilai2 > 60) {
            $grade2 = "D";
        } elseif ($nilai2 > 50) {
            $grade2 = "E";
        } elseif ($nilai2 < 50){
            $grade2 = "F";
        }
    
        if ($nilai2 > 70){
            $hasil2 = "LULUS";
        }else{
            $hasil2 = "TIDAK LULUS";
        }

        if ($rata > 70){
            $hasilrata = "LULUS";
        }else{
            $hasilrata = "TIDAK LULUS";
        }

    }
       
  ?>
  <div class="container">
      <div class="row">
          <h4><?php echo "Nama : $nama "?></h4>
      </div>
      <div class="row">
          <h4><?php echo "Kelas  : $kelas "?></h4>
      </div>
 <div class="row">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mapel</th>
      <th scope="col">Nilai</th>
      <th scope="col">Grade</th>
      <th scope="col">Keterangan</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Produktif</td>
      <td><?php echo "$np"?></td>
      <td><?php echo "$grade"?></td>
      <td><?php echo "$hasil"?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Normatif</td>
      <td><?php echo "$nn"?></td>
      <td><?php echo "$grade1"?></td>
      <td><?php echo "$hasil1"?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mulok</td>
      <td><?php echo "$nm"?></td>
      <td><?php echo "$grade2"?></td>
      <td><?php echo "$hasil2"?></td>
    </tr>
  </tbody>
</table>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            <h4>Nilai Rata - Rata :</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <h4><?php echo "$rata"?></h4>
            </div>
            <div class="row">
                <h4><?php echo "$hasilrata"?></h4>
            </div>
        </div>
    </div>
</div>
 </div>
 
  </div>
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
