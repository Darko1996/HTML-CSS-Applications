<?php
include 'scripts/db_connect.php';

$seasons = null;
$tiretype = null;
$show = null;
$pom = null;

$upit = null; 

if(!isset($_GET['show']))
{
    $pom = true;
}
else
{ 
    switch($_GET['show']) 
    {
        case "CAR_SUMMER_TIRES": $seasons = "Summer";
                                 $tiretype = "AUTO";
                                break;
        case "CAR_FOR_ALL_SEASONS": $seasons = "All seasons";
                                    $tiretype = "AUTO";
                                break;
        case "4x4_SUV_SUMMER_TIRES": $seasons = "Summer";
                                     $tiretype = "4x4/SUV";
                                break;
        case "4x4_SUV_FOR_ALL_SEASONS": $seasons = "All seasons";
                                        $tiretype = "4x4/SUV";
                                break;
        case "VAN_SUMMER_TIRES": $seasons = "Summer";
                                 $tiretype = "VAN";
                                break;
        case "VAN_FOR_ALL_SEASONS": $seasons = "All seasons";
                                    $tiretype = "VAN";
                                break;
        case "TRUCKS_AND_BUSES_SUMMER_TIRES": $seasons = "All seasons";
                                              $tiretype = "TRUCKS AND BUSES";
                                break;  
    }
    $upit = "SELECT * FROM tire WHERE seasons = '".$seasons."' AND tiretype = '".$tiretype."';"; 
    $pom = false;
}

$upitB = null;

if(isset($_POST['search']))
{
     
    if($_POST['tiretype'] != "Type")
    {
        $upitB .= "tiretype = '".$_POST['tiretype']."'";
    }
    if ($_POST['manufacturers'] != "Manufacturers")
    {
        if($upitB != null)
        {
            $upitB .= " AND ";
        }
        $upitB .= "manufactures = '".$_POST['manufacturers']."'";
    }
    if($_POST['width'] != "Width")
    {
        if($upitB != null)
        {
            $upitB .= " AND ";
        }

        $upitB .= "width = '".$_POST['width']."'";
    }   
    if($_POST['heigh'] != "Heigh")
    {
        if($upitB != null)
        {
            $upitB .= " AND ";
        }
        $upitB .= "height = '".$_POST['heigh']."'";
    }
    if($_POST['diameter'] != "Diameter")
    {
        if($upitB != null)
        {
            $upitB .= " AND ";
        }
        $upitB .= "diameter = '".$_POST['diameter']."'";
    }
    if($_POST['seasons'] != "Seasons")
    {
        if($upitB != null)
        {
            $upitB .= " AND ";
        }
        $upitB .= "seasons = '".$_POST['seasons']."'";
    }
    if($_POST['price'] != "Price")
    { 
        if($upitB == null)
        {
            $upitB .= " 1 ";
        }
        if($_POST['price'] == "Lowest")
        { 
            $upitB .= " ORDER BY price ASC";
        }
        elseif($_POST['price'] == "Highest")
        {
            $upitB .= " ORDER BY price DESC";
        }
    }
    
    //echo "<script>alert('".addslashes($upit)."');</script>";
    
    if($upitB == null && $upit == null)
    {
        $pom = true; 
    }
    elseif($upitB != null)
    {
        $upit = "SELECT * FROM tire WHERE ".$upitB;
        $pom = false;
    }
    $pom = false; 
}


if($pom == true)
{
   $upit = "SELECT * FROM tire ORDER BY id DESC";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The tire place of Jacksonville | Tires</title>
    <meta property="og:site_name" content="Just Tires">
    <meta name="keywords" content="the tire place of jacksonwille,ford tires, jeep tires, bmw tires, toyota tires, mini cooper tires,tires, tires usa, tires florida, best tires, selling tires, summer tires, winter tires, suv tires, auto tires, van tires, bus tires, trucks tires, roadside assistance,roadside assistance florida,
    roadside assistance usa, the tire place of jacksonwille, tires for sale, tires for buying,cheepest tires in florida, best tires in florida, tires for vehicles">
    <meta name="description" content="Just Tires sells tires for every type of vehicle. Find sport tires for your Jeep, everyday tires for your Toyota, or winter tires for your Mini Cooper. Best price in the town and service quality guarantee. ">
    <meta name="THE TIRE PLACE OF JACKSONWILLE" content=",">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="Slike/ikonica.png">
    <link rel="stylesheet" type="text/css" href="Tires.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="Tires.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header id="showcase" class="grid">
        <a href="index.php"><div class="logo"><img src="Slike/logo.png" alt=""></div></a>
        <div id="login"><a href="Login.php"><i class="fas fa-sign-in-alt"></i></a></div>
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
            <div data-aos="fade-down" class="strelica">
                <a href="#section-a"><i class="far fa-caret-square-up"></i></a><!-- strelica za gore -->
            </div>
            <div id="tires-traka">
                <img src="Slike/gume-levo.png" alt="">
                <h2>20 YEARS OF TRUST</h2>
            </div>
        </section>
        <!-- section c -->  
        <section id="section-c" class="grid">
            <form action="Tires.php" method="post">
                <div data-aos="flip-up" data-aos-duration="1000" data-aos-once="true" class="container-fluid bg-light ">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="tiretype" id="inputState" class="form-control">
                                    <option value="Type" selected>Type</option>
                                    <option value="AUTO">AUTO</option>
                                    <option value="4x4/SUV">4x4/SUV</option>
                                    <option value="VAN">VAN</option>
                                    <option value="TRUCKS AND BUSES">TRUCKS AND BUSES</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="price" id="inputState" class="form-control">
                                    <option value="Price" selected>Price</option>
                                    <option value="Lowest">Lowest</option>
                                    <option value="Highest">Highest</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="manufacturers" id="inputState" class="form-control">
                                    <option value="Manufacturers" selected>Manufacturers</option>
                                    <option value="Avon">Avon</option>
                                    <option value="BFGoodrich">BFGoodrich</option>
                                    <option value="Bridgestone">Bridgestone</option>
                                    <option value="Continental">Continental</option>
                                    <option value="Cooper">Cooper</option>
                                    <option value="Dick Cepek">Dick Cepek</option>
                                    <option value="Dunlop">Dunlop</option>
                                    <option value="Falken">Falken</option>
                                    <option value="Firestone">Firestone</option>
                                    <option value="Fuzion">Fuzion</option>
                                    <option value="General Tire">General Tire</option>
                                    <option value="Goodyear">Goodyear</option>
                                    <option value="Hankook">Hankook</option>
                                    <option value="Hoosier">Hoosier</option>
                                    <option value="Kumho">Kumho</option>
                                    <option value="Laufenn">Laufenn</option>
                                    <option value="Power King">Power King</option>
                                    <option value="Pireli">Pireli</option>
                                    <option value="Nexen">Nexen</option>
                                    <option value="Michelin">Michelin</option>
                                    <option value="Riken">Riken</option>
                                    <option value="Sumitomo">Sumitomo</option>
                                    <option value="Toyo">Toyo</option>
                                    <option value="Uniroyal">Uniroyal</option>
                                    <option value="Vredestein">Vredestein</option>
                                    <option value="Yokohama">Yokohama</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-3">
                            <div class="form-group ">
                                <select name="width" id="inputState " class="form-control">
                                    <option value="Width" selected>Width</option>
                                    <option value="145">145</option>
                                    <option value="155">155</option>
                                    <option value="165">165</option>
                                    <option value="175">175</option>
                                    <option value="185">185</option>
                                    <option value="195">195</option>
                                    <option value="205">205</option>
                                    <option value="215">215</option>
                                    <option value="225">225</option>
                                    <option value="235">235</option>
                                    <option value="245">245</option>
                                    <option value="255">255</option>
                                    <option value="265">265</option>
                                    <option value="275">275</option>
                                    <option value="285">285</option>
                                    <option value="295">295</option>
                                    <option value="305">305</option>
                                    <option value="325">325</option>
                                    <option value="135">135</option>
                                    <option value="315">315</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="6.5">6.5</option>
                                    <option value="7.5">7.5</option>
                                    <option value="8.5">8.5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="heigh" id="inputState" class="form-control">
                                    <option value="Heigh" selected>Height</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                    <option value="60">60</option>
                                    <option value="65">65</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="100">100</option>
                                    <option value="25">25</option>
                                    <option value="75">75</option>
                                    <option value="85">85</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="diameter" id="inputState" class="form-control">
                                    <option value="Diameter" selected>Diameter</option>
                                    <option value="R13">R13</option>
                                    <option value="R14">R14</option>
                                    <option value="R15">R15</option>
                                    <option value="R16">R16</option>
                                    <option value="R17">R17</option>
                                    <option value="R18">R18</option>
                                    <option value="R19">R19</option>
                                    <option value="R20">R20</option>
                                    <option value="R21">R21</option>
                                    <option value="R12">R12</option>
                                    <option value="R12C">R12C</option>
                                    <option value="R13C">R13C</option>
                                    <option value="R14C">R14C</option>
                                    <option value="R15C">R15C</option>
                                    <option value="R16C">R16C</option>
                                    <option value="R17.5">R17.5</option>
                                    <option value="R17C">R17C</option>
                                    <option value="R22">R22</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 pt-3">
                            <div class="form-group">
                                <select name="seasons" id="inputState" class="form-control">
                                    <option value="Seasons" selected>Seasons</option>
                                    <option value="Summer">Summer</option>
                                    <option value="All seasons">All seasons</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="search" value="Search">
                        </div>
                    </div>
                </div>
            </form>

            <ul>
                <LI>
                    <div class="card">
                        <div  data-aos-once="true" data-aos="fade-down" class="proizvodi">
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
                                    }
                                }
                                else
                                {
                                    echo "currently out of stock";
                                } 
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
            <div class="footer-kolone">
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
                        <li><h4>WHY US?</h4>
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
                        <li><h4>CONTACT</h4>
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