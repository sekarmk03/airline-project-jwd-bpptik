<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Akhir Bootstrap CSS -->

    <!-- Bikin Css Sendiri -->
    <link rel="stylesheet" href="css/style.css">

    <title> Project </title>
  </head>
  <body>

    <!-- Bagian Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
     <div class="container">
      <a class="navbar-brand" href="#">Airport Website</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="maskapai.php">MASKAPAI</a>
          </li>
          <a class="btn btn-primary" href="pesan.php" role="button">BOOKING TICKET</a>
        </ul>
      </div>
     </div>
    </nav>
    <!-- Akhir Bagian Navbar -->

    <!-- Jumbotron -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pesawat1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pesawat Terbang 1</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pesawat2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pesawat Terbang 2</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pesawat3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pesawat Terbang 3</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>   
     <!-- Akhir Jumbotron -->
<br><br><br>
     <!-- Isi -->
        <div class="container">
        <center> <h2> Daftar Rute Tersedia Saat Ini </h2> </center>
        <br><br>
         <table class="table" border="1">
            <thead>
                <tr>
                    <th> <h4> No. </h4> </th>
                    <th> <h4> Maskapai </h4> </th>
                    <th> <h4> Asal Penerbangan </h4> </th>
                    <th> <h4> Tujuan Penerbangan </h4> </th>
                    <th> <h4> Harga Tiket </h4> </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td id="nomer"> <h6> 1 </h6> </td>
                    <td> <h6> Adam Air </h6> </td>
                    <td> <h6> Soekarno-Hatta (CGK) </h6> </td>
                    <td> <h6> Sultan Iskandarmuda (BTJ) </h6> </td>
                    <th> <h6> Rp.2.000.0000 </h6> </th>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td id="nomer"> <h6> 2 </h6> </td>
                    <td> <h6> Citilink </h6> </td>
                    <td> <h6> Soekarno-Hatta (CGK) </h6> </td>
                    <td> <h6> Sultan Iskandarmuda (BTJ) </h6> </td>
                    <th> <h6> Rp.89.000 </h6> </th>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td id="nomer"> <h6> 3 </h6> </td>
                    <td> <h6> Garuda Indonesia </h6> </td>
                    <td> <h6> Soekarno-Hatta (CGK) </h6> </td>
                    <td> <h6> Ngurah Rai (DPS) </h6> </td>
                    <th> <h6> Rp.1.500.000 </h6> </th>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td id="nomer"> <h6> 4 </h6> </td>
                    <td> <h6> Lion Air </h6> </td>
                    <td> <h6> Husein Sastranegara (BDO) </h6> </td>
                    <td> <h6> Hasanudin (UPG) </h6> </td>
                    <th> <h6> Rp.1.800.000 </h6> </th>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td id="nomer"> <h6> 5 </h6> </td>
                    <td> <h6> Sriwijaya Air </h6> </td>
                    <td> <h6> Abdul Rahman Saleh (MLG) </h6> </td>
                    <td> <h6> Ngurah Rai (DPS) </h6> </td>
                    <th> <h6> Rp.1.000.000 </h6> </th>
                </tr>
            </tbody>

            <tbody>
                <tr>
                    <td id="nomer"> <h6> 6 </h6> </td>
                    <td> <h6> Susi Air </h6> </td>
                    <td> <h6> Husein Sastranegara (BDO) </h6> </td>
                    <td> <h6> Inanwatan (INX) </h6> </td>
                    <th> <h6> Rp.20.000 </h6> </th>
                </tr>
            </tbody>
        </table>
        <br><br>
        </div>
     <!-- Akhir Isi -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>