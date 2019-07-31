<?php
include 'scripts/db_connect.php';
$upit = "SELECT * FROM tire ORDER BY id DESC";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The tire place of Jacksonville | Home</title>
    <meta property="og:site_name" content="Just Tires">
    <meta name="keywords" content="the tire place of jacksonwille,ford tires, jeep tires, bmw tires, toyota tires, mini cooper tires,tires, tires usa, tires florida, best tires, selling tires, summer tires, winter tires, suv tires, auto tires, van tires, bus tires, trucks tires, roadside assistance,roadside assistance florida,
    roadside assistance usa, the tire place of jacksonwille, tires for sale, tires for buying,cheepest tires in florida, best tires in florida, tires for vehicles">
    <meta name="description" content="Just Tires sells tires for every type of vehicle. Find sport tires for your Jeep, everyday tires for your Toyota, or winter tires for your Mini Cooper. Best price in the town and service quality guarantee. ">
    <meta name="THE TIRE PLACE OF JACKSONWILLE" content=",">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="Slike/ikonica.png">
    <link rel="stylesheet" type="text/css" href="CSS.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header id="showcase" class="grid">
        <a href="index.php"><div class="logo"><img src="Slike/logo.png" alt=""></div></a>
        <div class="navTekst">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="Tires.php"><li>Tires</li></a>
                <a href="About us.php"><li>About us</li></a>
                <a href="Contact.php"><li>Contact</li></a>
            </ul>
        </div>
        <div class="trakica">
            <p><i class="fas fa-phone-volume"></i> 904-400-0666 </p>
        </div>
        <div class="trakica2">
            <p><i class="fas fa-home"></i>JACKSONVILLE FL 32207</p>
        </div>
    </header>

    <!-- main -->
    <main id="main">
        <!-- section a -->  
        <section id="section-a" class="grid">
           <ul>
               <li>
                   <div class="card">
                        <div class="pozadina">
                        <img src="Slike/pozadina1.jpg" alt="" style="z-index:-1">
                    </div>
                </li>
            </ul>
        </section> 
        <!-- section b -->  
        <div class="pozadina-tel"></div>
        <section id="section-b" class="grid">
            <div data-aos="fade-down" class="strelica">
                <a href="#section-a"><i class="far fa-caret-square-up"></i></a><!-- strelica za gore -->
            </div>
            <ul>
                <li>
                    <div class="card">
                        <div id="levaTraka">
                            <div class="auto-gume">
                                <H4>AUTO TIRES</H4>
                                <ul>
                                    <li><a href="Tires.php?show=CAR_SUMMER_TIRES">SUMMER TIRES</a></li>
                                    <li><a href="Tires.php?show=CAR_FOR_ALL_SEASONS">TIRES FOR ALL SEASONS</a></li>
                                </ul>
                            </div>
                            <div class="suv-gume">
                                <H4>4x4/SUV TIRES</H4>
                                <ul>
                                    <li><a href="Tires.php?show=4x4_SUV_SUMMER_TIRES">SUMMER TIRES</a></li>
                                    <li><a href="Tires.php?show=4x4_SUV_FOR_ALL_SEASONS">TIRES FOR ALL SEASONS</a></li>
                                </ul>
                            </div>
                            <div class="kombi-gume">
                                    <H4>VAN TIRES</H4>
                                <ul>
                                    <li><a href="Tires.php?show=VAN_SUMMER_TIRES?">SUMMER TIRES</a></li>
                                    <li><a href="Tires.php?show=VAN_FOR_ALL_SEASONS">TIRES FOR ALL SEASONS</a></li>
                                </ul>
                            </div>
                            <div class="kamion-gume">
                                <H4>TIRES FOR TRUCKS AND BUSES</H4>
                                <ul>
                                    <li style="padding-bottom: 1em;"><a href="Tires.php?show=TRUCKS_AND_BUSES_SUMMER_TIRES">ALL TIRES</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <!-- section c -->  
        <section id="section-c" class="grid">
            <ul>
                <LI>
                    <div class="card">
                        <div data-aos="zoom-in" data-aos-once="true" class="proizvodi">
                            <h2>POPULAR TIRES</h2>
                            <ul>
                                <li>
                                <?php
                                $result = $kon->query($upit);
                                $i=1;
                                if ($result->num_rows > 0) 
                                {  
                                    while($row = $result->fetch_assoc())   
                                    {
                                        echo "
                                        <div class='proizvod'". $i.">
                                            <img src='".$row['image']."' alt=''>
                                            <div class='proizvod-info 1'>
                                                <h5>".$row['manufactures']."</h5>
                                                <p class='cena'>
                                                    <span>".$row['price']."$</span>
                                                </p>
                                                <span class='dimenzije sirina'>Width: ".$row['width']."</span>
                                                <span class='dimenzije visina'>Height: ".$row['height']."</span>
                                                <span class='dimenzije precnik'>Diameter: ".$row['diameter']."</span>
                                            </div>
                                        </div>
    ";                                  
                                        $i++;
                                        if($i == 9) break;
                                        
                                    }
                                }
                                else
                                {
                                    echo "currently out of stock";
                                } 
                                $kon->close();
                                ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </LI>
            </ul>
        </section>

        <footer data-aos="fade-right" data-aos-once="true" id="main-footer" class="grid">
            <img src="Slike/logo.png" alt="">
            
            <div data-aos="fade-right" data-aos-once="true"  class="footer-kolone">
                <div class="about-us">
                    <ul>
                        <li><h4>ABOUT US</h4>
                            <p>
                                    The company The tire place of Jaksonville exists over 20 years ago,
                                    reopened at the beginning of the year under new management.
                                    Customers related. Best price in the town and service quality guarantee.</p>
                        </li>
                    </ul>
                </div>
                <div class="why-us">
                    <ul>
                        <li>
                            <h4>WHY US?</h4>
                            <p><i class="fas fa-circle-notch"></i>Under 20 years of trust.</p>
                            <p><i class="fas fa-circle-notch"></i>New menagment.</p>
                            <p><i class="fas fa-circle-notch"></i>Roadside assistance available.</p>
                            <p><i class="fas fa-circle-notch"></i>Best price in town guarantee.</p>
                            <p><i class="fas fa-circle-notch"></i>Best location.</p>
                        </li>
                    </ul>
                </div>
                <div class="contact">
                    <ul>
                        <li>
                            <h4>CONTACT</h4>
                            <p><i class="fas fa-phone"></i>CALL US: 904-400-0666</p>
                            <p><i class="fas fa-envelope"></i>EMAIL US:<br>tireplaceofjacksonvilleinc@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt"></i>LOCATION:<br>4111 phillips hwy JACKSONVILLE 32207</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="end-footer">
                <div class="ikonice">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/TIRE-PLACE-of-Jacksonville-177812429708709/"><i class="fab fa-facebook-square"></i></a>
                </div>
                <div><p> The tire place of JACKSONVILLE</p></div>
                <div class="darpet-link"><p>All rights reserved © 2018 by</p> <a href="http://www.darpetdev.com/" target="_blank">Darpet team</a></div>
            </div>
        </footer>
    </main>

    <!-- za animacije -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- jquery za smoth scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          
</body>
</html>