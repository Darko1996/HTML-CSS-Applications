<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posteljine zvezda</title>
    <link rel="stylesheet" type="text/css" href="css proizvoda/jastucnice.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="Javascript proizvoda/jastucnica.js"></script>

    <link href="lightbox.css" rel="stylesheet">
    <meta name="keywords" content="posteljine,novi pazar,carsafi,step deka,cebad, peskiri, posteljine zvezda, zvezda, prodaja posteljine, prodaja peskira, novi pazar prodaja">
    <meta name="description" content="posteljine,novi pazar,carsafi,step deka,cebad, peskiri, posteljine zvezda, zvezda, prodaja posteljine, prodaja peskira, novi pazar prodaja, prodaja step deka, prodaja peskira, prodaja kuhinjskih krpa, kuhinjske krpe, trgovina">
</head>
<body>
    <!-- header showcase-->
    <header id="showcase" class="grid">
         <a href="Login.php?from=Jastucnice"><i class="fas fa-sign-in-alt"></i></a> <!-- login ikonica -->
        <div id="trakica">
                <a href="https://www.facebook.com/dejan.slavkovic.75?fb_dtsg_ag=AdxTteOs1Trla3Quaz5IwG_ahEc15XT7Ng7vAd5CoM6nUA%3AAdxOA4x1qNOM0kLbpunbiDuANCRLsBQKRLSBfTsu2gYymQ"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/posteljine_zd_novi_pazar_/"><i class="fab fa-instagram"></i></a>
        </div>     
    <div class="logo">
        <a href="../index.php"><img src="css proizvoda/logo.png"></a>
    <div>
    <ul class="navTekst">
        <a href="../index.php"><li>O nama</li></a> 
        <a href="../index.php"><li>Proizvodi</li></a> 
        <a href="../index.php"><li>Kontakt</li></a> 
    </ul>
</header>
        <div class="naslov">
            <h1>Jastučnice</h1>
        </div>
          <a href="#trakica"><i class="fas fa-chevron-circle-up"></a></i> <!-- strelica za gore -->
            <div class="galerija">
            <?php
                $dir = 'Galerija proizvoda/Jastucnice/';
                $files = glob($dir.'*.*');
                $lastImeage = null;
                foreach ($files as $i) {
                    echo '<img src="'.$i.'"/>';
                    $lastImeage = $i;
                }
            ?>  
            </div>

<footer id="main-footer" class="grid">
    <div>Posteljina Zvezda</div>
    <div>All rights reserved © 2018 by <a href="http://www.darpetdev.com/" target="_blank">Darpet team</a></div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jquery da bi radio smoth scroll -->
<script src="lightbox.js"></script> <!-- lightbox -->
</body>
</html>