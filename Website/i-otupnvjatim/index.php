<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Monitoring Suhu Berbasis IOT">
    <meta name="author" content="devan,ilham,putra">

    <script type="text/javascript" src="assets/js/disable_right.js"></script>

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
           
    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!-- Icon Website -->
    <link rel="icon" href="assets/img/suhu.ico">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <title>Monitoring Suhu & Kelembapan</title>
</head>
<body>
    <main>
        <div class="navbar" style="width:100%;">
            <div class="p-4">
                <h5 class="text-white">MONITORING SUHU & KELEMBAPAN RUANGAN BERBASIS IOT DENGAN MENGGUNAKAN DHT22</h5>
                <span class="title-wrap text-muted">Tugas Final Project Mata Kuliah Mikrokontroller</span><br>
            </div>
        </div>
        <div class="wrap-graph" align="center">
            <iframe width="420" height="260" src="https://thingspeak.com/channels/1276718/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    
            <iframe width="420" height="260" src="https://thingspeak.com/channels/1276718/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
        </div>
    </main>

    <footer class="page-footer font-small footer-background pt-4 text-light">
        <div class="footer-text" style="width:100%;">
            <h6 class="text-white">DIKERJAKAN OLEH :</h6>
            <span class="text-muted"><i class="fas fa-user"></i>Devan Cakra Mudra Wijaya (18081010013)&nbsp;&nbsp;<i class="fas fa-user"></i>Muhammad Ilham Prasetyo Raharjo (18081010019)&nbsp;&nbsp;<i class="fas fa-user"></i>Wahyu Firman Syahputra (18081010055)</span><br>
        </div>
    </footer>
    
</body>
</html>