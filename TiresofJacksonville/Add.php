<?php 
    session_start();

    include 'scripts/db_connect.php';

    $price = null;
    $error = null;
    $newImage = null;
    $message = null;
    if(isset($_POST['confirm']))
    {
        if($_POST['tiretype'] == "Type")
            $error = true;

        $price = mysqli_real_escape_string($kon, $_POST['price']);
        if($price == "" || !is_numeric($price))
            $error = true;

        if ($_POST['manufacturers'] == "Manufacturers")
            $error = true;

        if($_POST['width'] == "Width")
            $error = true;
        
        if($_POST['heigh'] == "Heigh")
            $error = true;

        if($_POST['diameter'] == "Diameter")
            $error = true;

        if($_POST['seasons'] == "Seasons")
            $error = true;

        $target_dir = "Slike/tires/";
        $target_file = basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) 
        {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) 
            {
                $uploadOk = 1;
            } 
            else 
            {
                echo "<script>alert('The selected file is not an image.');</script>";
                $uploadOk = 0;
            }
        }


        // provera da li je slika ili gif ako nije ne moze biti uploadovana
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" )
        {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            $error = true;
        // if everything is ok, try to upload file
        } 
        else 
        {
            $files = glob($target_dir.'*.*');
            $lastImeage = null;
            $f = null;
            $max=0;
            foreach ($files as $i) 
            {
                $pom = explode('/', $i);
                $lastImage = explode('.', $pom[2]);
                if($lastImage[0] > $max)
                    $max = $lastImage[0];
                
            }
            

            $newImage = $target_dir.($max + 1).".jpeg";
            echo "<script>alert('".$newImage."');</script>";

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newImage)) 
            {} 
            else
            {
                $error = true;
            }
        }
        
        if($error == false)
        {
            $upit = "INSERT INTO `tire` (`id`, `tiretype`, `price`, `manufactures`, `width`, `height`, `diameter`, `seasons`, `image`) 
            VALUES (NULL, '".$_POST['tiretype']."', ".$price.", '".$_POST['manufacturers']."', '".$_POST['width']."', '".$_POST['heigh']."', 
            '".$_POST['diameter']."', '".$_POST['seasons']."', '".$newImage."');";

            if ($kon->query($upit) === TRUE) 
            {
                $message = 'ok';
            } 
            else 
            {
                $message = "false";
            }
                
            $kon->close();     
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The tire place of Jacksonville | Add</title>
    <meta property="og:site_name" content="Just Tires">
    <meta name="keywords" content="the tire place of jacksonwille,ford tires, jeep tires, bmw tires, toyota tires, mini cooper tires,tires, tires usa, tires florida, best tires, selling tires, summer tires, winter tires, suv tires, auto tires, van tires, bus tires, trucks tires, roadside assistance,roadside assistance florida,
    roadside assistance usa, the tire place of jacksonwille, tires for sale, tires for buying,cheepest tires in florida, best tires in florida, tires for vehicles">
    <meta name="description" content="Just Tires sells tires for every type of vehicle. Find sport tires for your Jeep, everyday tires for your Toyota, or winter tires for your Mini Cooper. Best price in the town and service quality guarantee. ">
    <meta name="THE TIRE PLACE OF JACKSONWILLE" content=",">
    <link rel="icon" href="Slike/ikonica.png">
    <link rel="stylesheet" type="text/css" href="Add.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="Add.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body  countextmenu="false">
    <?php
    if(!isset($_SESSION['user']))
    {
        header('location: Login.php?from=Carsafi');
    }
    else
    {
    ?>
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
    </header>    
    <!-- Add forma -->
    <form actopn="" class="prozor-dodavanje" method="POST" enctype="multipart/form-data" >
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
                        <input id="Price" name="price" type="text" placeholder="Price">
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
                    <!-- <input id="Add-product" type="file" name="fileToUpload" value="Add product"> -->
                    <input type="file" name="fileToUpload" id="Add-product"  value="Add product">
                </div>
            </div>
            <p>After selecting product data, press confirm!</p>
            <input id="Confirm" name="confirm" type="submit" value="Confirm">
        </div>
    </form>

    <!-- footer -->
    <div class="end-footer">
        <div class="ikonice">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/TIRE-PLACE-of-Jacksonville-177812429708709/"><i class="fab fa-facebook-square"></i></a>
        </div>
        <div><p> The tire place of JACKSONVILLE</p></div>
        <div class="darpet-link"><p>All rights reserved © 2018 by</p> <a href="http://www.darpetdev.com/" target="_blank">Darpet team</a></div>
    </div>
</footer>

<!-- za animacije -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
   AOS.init();
 </script>
 <!-- jquery za smoth scroll -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</body>
</html>
<?php }  

if($message == 'ok')
{
    echo "<script>alert('Product added successfully');</script>";
}
elseif($error == true || $message == "false")
{
    echo "<script>alert('You did not enter all the data. Please enter all the information correctly.');</script>";
}

?>