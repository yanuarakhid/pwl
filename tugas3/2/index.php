<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <form method="post" action="penumpang.php" class="mt-4 mb-4">
  <div class="form-group">
    <label for="tujuan">Tujuan</label>
    <select name="tujuan" class="form-control" id="tujuan">
      <option value="Jakarta - Semarang">Jakarta - Semarang</option>
      <option value="Solo - Jogja">Solo - Jogja</option>
      <option value="Surabaya - Bali">Surabaya - Bali</option>
    </select>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="jam" id="8.00" value="8.00" >
  <label class="form-check-label" for="8.00">
    8.00
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jam" id="9.00" value="9.00">
  <label class="form-check-label" for="9.00">
    9.00
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jam" id="10.00" value="10.00">
  <label class="form-check-label" for="10.00">
    10.00
  </label>
</div>
  <div class="form-group">
    <label for="penumpang">Jumlah Penumpang</label>
    <select name="penumpang" class="form-control" id="penumpang">
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
  <button type="submit" class="btn btn-success" name="next" value="next" >NEXT</button>
  <a class="btn btn-danger" href="index.php" onclick="return confirm('Yakin ?')" role="button">RESET</a>
</form>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>