<?php
// harga
$bakso =12000;
$soto = 9000;
$teh = 2000;
$jeruk = 3000;

// mula mula jumlah bakso
$jmlbakso =0 ;     
$jmlsoto =0 ;     
$jmlteh =0 ;     
$jmljeruk =0 ;

// tangkap data dari form
$jmlbakso = $_GET['jumlahbakso'];
$jmlsoto = $_GET['jumlahsoto']; 
$jmlteh = $_GET['jumlahteh'];
$jmljeruk = $_GET['jumlahjeruk'];

// harga total masing masing makanan
$hargabakso= $bakso * $jmlbakso;
$hargasoto= $soto * $jmlsoto;
$hargateh= $teh * $jmlteh;
$hargajeruk= $jeruk * $jmljeruk;

// fungsi hitung total semua harga makanan
function hitungTotal($hargabakso,$hargasoto,$hargateh,$hargajeruk)
{
    $anu = $hargabakso  + $hargasoto + $hargateh + $hargajeruk;
    return $anu;
}

$total = hitungTotal($hargabakso,$hargasoto,$hargateh,$hargajeruk);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <h1 class="text-center">Tugas CAH PWL</h1>
    <div class="container">
    <form action="index.php" method="get" class="mt-5">
  <div class="form-row">
    <div class="form-group col-sm-4">
  <fieldset disabled>
      <label for="labelbakso">Bakso</label>
      <input type="text" id="labelbakso" class="form-control" placeholder="Bakso (12000)">
    </fieldset>
    </div>
    <div class="form-group col-sm-4">
      <label for="jumlahbakso">Jumlah Bakso</label>
      <input type="text" class="form-control" name="jumlahbakso" id="jumlahbakso" placeholder="Input JUmlah Bakso">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-sm-4">
  <fieldset disabled>
      <label for="labelsoto">Soto</label>
      <input type="text" id="labelsoto" class="form-control" placeholder="Soto (9000)">
    </fieldset>
    </div>
    <div class="form-group col-sm-4">
      <label for="jumlahsoto">Jumlah Soto</label>
      <input type="text" class="form-control" name="jumlahsoto" id="jumlahsoto" placeholder="Input JUmlah Soto">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-sm-4">
  <fieldset disabled>
      <label for="labelteh">Teh</label>
      <input type="text" id="labelteh" class="form-control" placeholder="Teh (2000)">
    </fieldset>
    </div>
    <div class="form-group col-sm-4">
      <label for="jumlahteh">Jumlah Teh</label>
      <input type="text" class="form-control" name="jumlahteh" id="jumlahteh" placeholder="Input JUmlah Teh">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-sm-4">
  <fieldset disabled>
      <label for="labeljeruk">Harga Jeruk</label>
      <input type="text" id="labeljeruk" class="form-control" placeholder="Jeruk (3000)">
    </fieldset>
    </div>
    <div class="form-group col-sm-4">
      <label for="jumlahjeruk">Jumlah Jeruk</label>
      <input type="text" class="form-control" name="jumlahjeruk" id="jumlahjeruk" placeholder="Input JUmlah Jeruk">
    </div>
  </div>
  
  <button type="submit" class="btn btn-success">Hitung</button>
</form>
    </div>

    <div class="container mt-4 mb-5">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Bakso (12000)</td>
      <td><?php
    echo $jmlbakso;
    ?></td>
      <td> <?php
    echo $hargabakso;
    ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Soto (9000)</td>
      <td><?php
    echo $jmlsoto;
    ?></td>
      <td><?php
    echo $hargasoto;
    ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Teh (2000)</td>
      <td><?php
    echo $jmlteh;
    ?></td>
      <td><?php
    echo $hargateh;
    ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Jeruk (3000)</td>
      <td><?php
    echo $jmljeruk;
    ?></td>
      <td><?php
    echo $hargajeruk;
    ?></td>
    </tr>
    <tr>
    <td colspan="3">Harga Total</td>
      <td>Rp <?php
    echo $total;
    ?></td>
    </tr>
  </tbody>
</table>
<a class="btn btn-danger" href="index.php" onclick="return confirm('Yakin ?')" role="button">RESET</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>