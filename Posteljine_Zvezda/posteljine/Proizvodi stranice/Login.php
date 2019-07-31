<?php 
    session_start();
    if($_GET['from'] != null)
    {
        include '../pomocneSkripte/baza.php';
        include '../pomocneSkripte/kriptovanje.php';

        $from = $_GET['from']; 
        

        $unos = false;
        $pogresnoKorIme =false;
        $pogresnaLozinka=false;
        $korIme =null;
        $lozinka=null;
    

        if(isset($_POST['uloguj_se']))
        {   
            $unos=true;
            $korIme = mysqli_real_escape_string($kon, $_POST['korIme']);
            $kkorIme = enkripcija($korIme);
            $lozinka = mysqli_real_escape_string($kon, $_POST['lozinka']);
            $lozinka = enkripcija($lozinka);
                
            $upit="SELECT * FROM prijava WHERE korIme='$kkorIme'";
            $rezultat = $kon->query($upit);
            if($rezultat->num_rows > 0)
            {               
                $red = $rezultat->fetch_assoc();
                if($lozinka != $red['lozinka'])
                {
                    $pogresnaLozinka=true;
                }
                else
                {
                    $_SESSION['korisnik'] = $kkorIme;
                    switch($from)
                    {
                        case "Carsafi": header('location: CarsafiSaDugmetom.php');
                                        break;
                        case "Cebad":   header('location: CebadSaDugmetom.php');
                                        break;
                        case "Frotirani_carsafi": header('location: Frotirani carsafiSaDugmetom.php');
                                        break;
                        case "Jastucnice": header('location: JastucniceSaDugmetom.php');
                                        break;
                        case "Kuhinjske_krpe": header('location: Kuhinjske krpeSaDugmetom.php');
                                        break;
                        case "Peskiri": header('location: PeskiriSaDugmetom.php');
                                        break;
                        case "Posteljine": header('location: PosteljineSaDugmetom.php');
                                        break;
                        case "Step_deka": header('location: Step dekaSaDugmetom.php');
                                        break;
                        default:  header('location: ../index.php');
                    }
                     
                }
            }
            else
            {
                $pogresnoKorIme =true;
            }
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posteljine zvezda</title>
        <link rel="stylesheet" type="text/css" href="css proizvoda/login.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <meta name="keywords" content="posteljine,novi pazar,carsafi,step deka,cebad, peskiri, posteljine zvezda, zvezda, prodaja posteljine, prodaja peskira, novi pazar prodaja">
        <meta name="description" content="posteljine,novi pazar,carsafi,step deka,cebad, peskiri, posteljine zvezda, zvezda, prodaja posteljine, prodaja peskira, novi pazar prodaja, prodaja step deka, prodaja peskira, prodaja kuhinjskih krpa, kuhinjske krpe, trgovina">

        <!-- za login formu -->
        

    </head>
    <body>
        <!-- header showcase-->
        <header id="showcase" class="grid">
            <a href="Login.php"><i class="fas fa-sign-in-alt"></i></a> <!-- login ikonica -->
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
    
    <div class="login-page">
        <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="Šifra"/>
            <input type="text" placeholder="Adresa"/>
            <button>create</button>
        </form>
        <form class="login-form" method="POST" action="#">
            <input type="text" name="korIme" placeholder="Korisničko ime" <?php echo "value=".$korIme; ?>>
            <?php   
                if($korIme == "" && $unos==true)
                {
                    echo '<b style="color: red;">* Unesite korisnicko ime</b>';
                }
                else if($pogresnoKorIme == true)
                {
                    echo '<b style="color: red;">* Neispravno korisnicko ime</b>';         
                }
            ?>
            <input type="password" name="lozinka" placeholder="Šifra"/>
            <?php 
                if($lozinka == "" && $unos==true )
                {
                    echo '<b style="color: red;">* Unesite lozinku</b>';
                }
                else if($pogresnaLozinka == true)
                {
                    echo '<b style="color: red;">* Neispravna lozinka</b>';               
                }
            ?>
            <input id="dugme-login"type="submit" name="uloguj_se" value='Uloguj se'/>
        </form>
        </div>
    </div>
        

    <footer id="main-footer" class="grid">
        <div>Posteljina Zvezda</div>
        <div>All rights reserved © 2018 by <a href="http://www.darpetdev.com/" target="_blank">Darpet team</a></div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jquery da bi radio smoth scroll -->
    </body>
    </html>
    <?php
    }
    else
    header('../index.php');
    ?>