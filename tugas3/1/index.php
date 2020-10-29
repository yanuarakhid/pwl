<?php

if( isset($_POST["submit"]) ) {
    function HitungTotal($kehadiran,$uts,$uas,$tugas,$kuis)
    {
        // bobot nilai , kehadiran 10%, uts 30%, uas 40%, tugas & kuis 20%
        $total = ((($kehadiran - 4)*10)*0.1) + ($uts * 0.3) + ($uas * 0.4) + ((($tugas + $kuis)-100)*0.2);
        return $total; 
    }

    $nilai = HitungTotal($_POST["kehadiran"],$_POST["uts"],$_POST["uas"],$_POST["tugas"],$_POST["kuis"]);

    if ($nilai>80) {
        $nakhir= "A";
    }elseif ($nilai>=60 && $nilai<= 80) {
        $nakhir= "B";
    }elseif ($nilai>=40 && $nilai < 60) {
        $nakhir= "C";
    }elseif ($nilai>=20 && $nilai < 40) {
        $nakhir= "D";
    }elseif ($nilai < 20) {
        $nakhir= "E";
    }

    $jadi= "Nim " . $_POST["nim"] . " nilai akhir anda: " . $nilai . " dengan grade " . $nakhir;
}



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
  <div class="container">
  <form method="post" class="mt-4 mb-4">
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="nim" name="nim" class="form-control" id="nim" placeholder="11.11.1111">
  </div>
  <div class="form-group">
    <label for="kehadiran">Jumlah Kehadiran</label>
    <select name="kehadiran" class="form-control" id="kehadiran">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
    </select>
  </div>
  <div class="form-group">
    <label for="uts">UTS</label>
    <input type="uts" name="uts" class="form-control" id="uts">
  </div>
  <div class="form-group">
    <label for="uas">UAS</label>
    <input type="uas" name="uas" class="form-control" id="uas">
  </div>
  <div class="form-group">
    <label for="tugas">Tugas</label>
    <input type="tugas" name="tugas" class="form-control" id="tugas">
  </div>
  <div class="form-group">
    <label for="kuis">Kuis</label>
    <input type="kuis" name="kuis" class="form-control" id="kuis">
  </div>
  <button type="submit" class="btn btn-info" name="submit" value="submit" >Hitung Nilai</button>
</form>

<div class="mt-1">
<?php echo($jadi) ?>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>